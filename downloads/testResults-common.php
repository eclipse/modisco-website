<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());

if (is_array($projects))
{
	$projectArray = getProjectArray($projects, $extraprojects, $nodownloads, $PR);
	$tmp = array_keys($projectArray);
	$proj = "/" . (isset($_GET["project"]) && preg_match("/^(?:" . join("|", $projects) . ")$/", $_GET["project"]) ? $_GET["project"] :
	(sizeof($tmp) > 0 && isset($projectArray[$tmp[0]]) ? $projectArray[$tmp[0]] : ""));
}
else
{
	$proj = "";
}

$projct = preg_replace("#^/#", "", $proj);
$projectName = explode("/",$PR); $projectName = strtoupper($projectName[sizeof($projectName)-1]);
$PWD = getPWD("downloads/drops"); // see scripts.php

$isTools = isset($_GET["tools"]);
$isTech = isset($_GET["tech"]);
if (preg_match("#/(tools|technology)/#", $PWD, $m))
{
	$isTools = $m[1] == "tools";
	$isTech = $m[1] == "technology";
}
#if ($debug > 10) print "PR=$PR, proj=$proj, projct=$projct, isTools=$isTools, isTech=$isTech<br/>";

$projectDownloadsPagePath = "/" . $PR_www . "/downloads";
$buildName = isset($_GET["ID"]) && preg_match("#\d+\.\d+\.\d+/[NIMSR]\d{12}#",$_GET["ID"]) ? $_GET["ID"] : "";
$buildDir = ($isTools ? "/tools/$PR" : ($isTech ? "/technology/$PR" : "/$PR$proj")) . "/downloads/drops/";
$buildID = preg_replace("/.+\/(.+)/", "$1", $buildName);
$subprojName = array_flip($projects); $subprojName = isset($subprojName[$projct]) ? $subprojName[$projct] : "";
$pageTitle = $projectName . /*($subprojName && $projectName != $subprojName ? ' ' . $subprojName : '') .*/ " Build " . $buildName . " - Test Results";

$linkPre = $isBuildServer ? "" : getDownloadScript();

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
if (is_file($App->getProjectCommon()))
{
	include ($App->getProjectCommon());
}
ob_start();

print '<div id="midcolumn">
<div class="homeitem3col">
<h3>'. $pageTitle . '</h3>
<p>For more information on this build, please go to <a href="http://' . ($isBuildServer ? $_SERVER["SERVER_NAME"] : "www.eclipse.org") . $projectDownloadsPagePath . '/?project=' . $projct . '&amp;showAll=1&amp;hlbuild=' . $buildID . '#' . $buildID . '">this project\'s download page</a>.</p>
<ul class="releases">
';

$catgs = 
array (
	array (
		"Console Logs",
		"/$buildName/testresults/consolelogs/",
		".txt"
	),
	array (
		"JUnit Test Results",
		"/$buildName/testresults/xml/",
		".xml",
		"Errors &amp; Failures"
	),
	array (
		"Compilation Errors",
		"/$buildName/compilelogs/plugins/",
		".log",
		"Errors &amp; Warnings"
	)
);

foreach ($catgs as $num => $dirBits)
{
	if ($debug > 9) {
		print "[$PWD, $dirBits[1], $dirBits[2]]<br/>\n";
		print "[$linkPre, $buildDir, $dirBits[1]]<br/>\n";
	}
	if ($num === 0)
	{
		$files = loadDir($PWD . $dirBits[1], $dirBits[2]);
		$out = "";
		if (sizeof($files) > 0)
		{
			sort($files); reset($files);
			foreach ($files as $file)
			{
				$out .= '<li><a href="' . $linkPre . $buildDir . $dirBits[1] . $file . '">' .
				preg_replace("#_consolelog\.txt|\.AllSuites|\.metadata\.log\.txt#", "", $file) .
			'</a> (' . pretty_size(filesize($PWD . $dirBits[1] . $file)). ')</li>' . "\n";

			}
		} else
		{
			$out .= '<li><i><a href="' . $linkPre . $buildDir . $dirBits[1] . '">No console logs found</a></i>.</li>' . "\n";
		}
		print '<li><a href="javascript:toggle(\'e' . $num . '\')">' . $dirBits[0] . '</a>';
		print '<ul id="e' . $num . '"' . ($_GET["hl"]>0 ? ' style="display: none"' : '') . '>' . "\n";
		print $out;
		print '</ul>' . "\n";
	} else
	if ($num === 1)
	{
		$files = loadDirChildren($PWD . $dirBits[1], $dirBits[2]);
		$out = "";
		$noProblems = true;
		if (sizeof($files) > 0)
		{
			sort($files); reset($files);
			foreach ($files as $file)
			{
				$results = getTestResults($PWD . $dirBits[1] . $file);
				$noProblems = $noProblems && !$results;
				$out .= '<li><div>' . $results . '</div><a href="' . $linkPre . $buildDir. preg_replace("#/xml/#", "/html/", $dirBits[1]) . preg_replace("#\.xml$#",".html", $file) . '">' .
				preg_replace("/\.xml$/", "", $file) . '</a> (' . pretty_size(filesize($PWD . $dirBits[1] . $file)). ')</li>' . "\n";
			}
		}
		print '<li><div><b style="color:' . ($noProblems ? "green" : "red") . '">' . ($noProblems ? "0 " : "") . $dirBits[3] . '</b></div>' .
	'<a href="javascript:toggle(\'e' . $num . '\')">' . $dirBits[0] . '</a>';
		print '<ul id="e' . $num . '"' . (!$noProblems || $_GET["hl"]==$num ? '' : ' style="display: none"') . '>' . "\n";
		print $out;
		print '</ul>' . "\n";
	} else
	if ($num === 2)
	{
		$files = loadDirChildren($PWD . $dirBits[1], $dirBits[2]);
		$out = "";
		$summary = getCompileResultsSummary($PWD . $dirBits[1] . "../summary.txt");
		$noProblems = !$summary;
		if (sizeof($files) > 0)
		{
			sort($files); reset($files);
			foreach ($files as $file)
			{
				$results = getCompileResults($PWD . $dirBits[1] . $file);
				$noProblems = $noProblems && !$results;
				$out .= '<li><div>' . $results . '</div><a href="' . $linkPre . $buildDir . $dirBits[1] . $file . '">' .
				preg_replace("/((\/@dot|\/doc|.jar).bin.log|_\d+\.\d+\.\d+\.(v\d+|HEAD))/", "", $file) . '</a> (' . pretty_size(filesize($PWD . $dirBits[1] . $file)). ')</li>' . "\n";
			}
		}
		print '<li><div><b style="color:' . ($noProblems ? "green" : "red") . '">' . ($noProblems ? "0 " : "") . ($summary? $summary : $dirBits[3]) . '</b></div>' .
		'<a href="javascript:toggle(\'e' . $num . '\')">' . $dirBits[0] . '</a>';
		print '<ul id="e' . $num . '"' . (!$noProblems || $_GET["hl"]==$num ? '' : ' style="display: none"') . '>' . "\n";
		print $out;
		print '</ul>' . "\n";
	}
}

print "</ul></div></div>\n";

$html = ob_get_contents();
ob_end_clean();

$pageKeywords = "";
$pageAuthor = "Nick Boldt";

$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="http://' . ($isBuildServer ? $_SERVER["SERVER_NAME"] : "www.eclipse.org") . '/modeling/includes/downloads.css"/>' . "\n");
$App->AddExtraHtmlHeader('<script src="http://' . ($isBuildServer ? $_SERVER["SERVER_NAME"] : "www.eclipse.org") . '/modeling/includes/downloads.js" type="text/javascript"></script>' . "\n"); //ie doesn't understand self closing script tags, and won't even try to render the page if you use one
$App->generatePage(isset ($theme) ? $theme : "", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

function getCompileResultsSummary($file)
{
	if (is_file($file))
	{
		$results = file($file);
		$results = join($results, "");
		$patterns_str = array (
	", 0W",
	", 0E",
	", 0F"
	);
	$patterns = array (
	"/(\d+)P, /" => " Problems (",
	"/(\d+)W/" => " Warnings",
	"/(\d+)E/" => " Errors",
	"/(\d+)F/" => " Failures",
	"/(\d+)P/" => " Problems (?",
	);
	foreach ($patterns_str as $find)
	{
		$results = str_replace($find, "", $results);
	}
	foreach ($patterns as $find => $replace)
	{
		$results = preg_replace($find, "$1" . $replace, $results);
	}
	$results = trim($results);
	return $results ? $results . ")" : null;
	}
	return null;
}

function getCompileResults($file)
{
	$results = "";
	if (is_file($file))
	{
		$results = exec("tail -1 $file");
		if (!$results)
		{
			$results = file("$file"); $results = $results[sizeof($results)-1];
		}
	}
	if (preg_match("/problem|error|warning/", $results))
	{
		return $results;
	} else
	{
		return "";
	}
}

function getTestResults($file)
{
	$results = "";
	$data = file($file);
	foreach ($data as $line)
	{
		// <testsuite errors="0" failures="0" ...>
		preg_match("/<testsuite errors=\"(\d+)\" failures=\"(\d+).+\"/", $line, $matches);
		if (isset ($matches) && is_array($matches) && sizeof($matches) >= 3)
		{
			$results = $matches[1] === "0" && $matches[2] === "0" ? "" : $matches[1] . "E, " . $matches[2] . "F";
			return $results;
		}
		preg_match("/<testsuite.+failures=\"(\d+)\" errors=\"(\d+)\".+/", $line, $matches);
		if (isset ($matches) && is_array($matches) && sizeof($matches) >= 3)
		{
			$results = $matches[2] === "0" && $matches[1] === "0" ? "" : $matches[2] . "E, " . $matches[1] . "F";
			return $results;
		}
		if (false!==strpos($line,"<testsuites/>") || false!==strpos($line,"<testsuites />") || false!==strpos($line,"<testsuites></testsuites>") || false!==strpos($line,"Failed to invoke suite")) // no tests run!
		{
			return "<b style='color:red'>D N R</b>";
		}
	}
	return $results;
}

function loadDir($dir, $ext)
{
	$stuff = array ();

	if (is_dir($dir) && is_readable($dir))
	{
		$handle = opendir($dir);
		while (($file = readdir($handle)) !== false)
		{
			if (preg_match("/$ext$/", $file) && !preg_match("/^\.{1,2}$/", $file) && is_file("$dir/$file"))
			{
				$stuff[] = $file;

			}
		}
		closedir($handle);
	}

	return $stuff;
}

function loadDirChildren($dir, $ext)
{
	$stuff = array ();

	if (is_dir($dir) && is_readable($dir))
	{
		$handle = opendir($dir);
		while (($file = readdir($handle)) !== false)
		{
			if (preg_match("/$ext$/", $file) && !preg_match("/^\.{1,2}$/", $file) && is_file("$dir/$file"))
			{
				$stuff[] = $file;

			} else
			if (!preg_match("/^\.{1,2}$/", $file) && is_dir("$dir/$file"))
			{
				$children = loadDirChildren("$dir/$file", $ext);
				foreach ($children as $child)
				{
					$stuff[] = $file . "/" . $child;
				}

			}
		}
		closedir($handle);
	}

	return $stuff;
}

?>