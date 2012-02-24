<?php
function doLatest($releases, $label = "Releases")
{
	global $rssfeed, $showMax, $showAll, $sortBy;
	if (sizeof($releases)>0)
	{
		print "<div class=\"homeitem3col\">\n";
		print "<a name=\"latest\"></a><h3>${rssfeed}Latest $label</h3>\n";
		print "<ul class=\"releases\">\n";
		$c = 0;
		foreach ($releases as $rID => $rbranch)
		{
			$ID = preg_replace("/^(\d{12})([IMNRS])$/", "$2$1", $rID);
			$branch = preg_replace("/.$/", "", $rbranch);
			print outputBuild($branch, $ID, $c++);
			if (!$showAll && $c == $showMax && $c < sizeof($releases))
			{
				print showToggle($showAll, $showMax, $sortBy, sizeof($releases));
				break;
			}
			else if ($showAll && sizeof($releases) > $showMax && $c == sizeof($releases))
			{
				print showToggle($showAll, $showMax, $sortBy, sizeof($releases));
			}
		}
		print "</ul>\n";
		print "</div>\n";
	}
}

function reorderAndSplitArray($arr, $buildTypes)
{
	// the first dimension's order is preserved (kept as it is in the config file)
	// sort the second dimension using the IMNRS order in $buildTypes
	// rsort the third dimension

	$new = array();
	$rels = array();
	foreach ($buildTypes as $br => $types)
	{
		foreach ($types as $bt => $names)
		{
			if ($bt == "R" && isset($arr[$br][$bt]))
			{
				$id = $arr[$br][$bt][0];
				$rels[substr($id,1) . $bt] = $br . $bt;
			}
			else if (array_key_exists($br, $arr) && array_key_exists($bt, $arr[$br]) && is_array($arr[$br][$bt]))
			{
				$new[$br][$bt] = $arr[$br][$bt];
				rsort($new[$br][$bt]);
			}
		}
	}
	return array($new,$rels);
}

function getBuildsFromDirs() // massage the builds into more useful structures
{
	global $PWD, $sortBy;

	$branchDirs = loadDirSimple($PWD, ".*", "d");
	$buildDirs = array();

	foreach ($branchDirs as $branch)
	{
		//if ($branch != "OLD" && ($branch != "0.9.0" || isset($_GET['all'])) /* XXX hide branch 0.9.0 for now */)
		$buildDirs[$branch] = loadDirSimple("$PWD/$branch", "[IMNRS]\d{12}", "d");
	}

	$builds_temp = array();
	foreach ($buildDirs as $br => $dirList)
	{
		foreach ($dirList as $dir)
		{
			//if($dir != 'R201202150547') { /* XXX hide release until release day */
				$ty = substr($dir, 0, 1); //first char

				if ($sortBy != "date")
				{
					$builds_temp[$br][$ty][] = $dir;
				}
				else
				{
					$dttm = substr($dir, 1); // last 12 digits
					$a = $dttm . $ty;
					$b = $br . $ty;

					$builds_temp[$a] = $b;
				}
			//}
		}
	}

	return $builds_temp;
}

function getBuildTypes($branches, $buildtypes)
{
	$arr = array();

	foreach ($branches as $branch)
	{
		foreach (array_keys($buildtypes) as $z)
		{
			if (!array_key_exists($branch, $arr))
			{
				$arr[$branch] = array();
			}

			// [2.0][N]
			$arr[$branch][$z] = "$branch {$buildtypes[$z]} Build";
		}
	}

	return $arr;
}

function IDtoDateStamp($ID, $style) // given N200402121441, return date("D, j M Y -- H:i (O)")
{
	$styles = array('Y/m/d H:i', "D, j M Y -- H:i (O)", 'Y/m/d');
	$m = null;
	if (preg_match("/(\d{4})(\d\d)(\d\d)(?:_)?(\d\d)(\d\d)/", $ID, $m))
	{
		$ts = mktime($m[4], $m[5], 0, $m[2], $m[3], $m[1]);
		return date($styles[$style], $ts);
	}

	return "";
}

function createFileLinks($dls, $PWD, $branch, $ID, $pre2, $filePreProj, $ziplabel = "") // the new way - use a ziplabel pregen'd from a dir list!
{
	global $PR, $suf, $proj, $projct, $filePreStatic, $extraZips, $projects, $showBuildResults;
	$uu = 0;

	if (!$ziplabel)
	{
		$zips_in_folder = loadDirSimple("$PWD/$branch/$ID/", "(\.zip|\.tar\.gz)", "f");
		$ziplabel = preg_replace("/(.+)\-([^\-]+)(\.zip|\.tar\.gz)/", "$2", $zips_in_folder[0]); // grab first entry
	}

	$cnt=-1; // for use with static prefix list

	if (!isset($dls[$proj]) && isset($dls["/"]))
	{
		$dls[$proj] = $dls["/"];
	}
	if (!isset($dls[$proj]))
	{
		// set default
		$flip = array_flip($projects);
		$dls[$proj] = array($flip[$projct] => array(
			"<acronym title=\"Archived Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
			//"SDK (Runtime, Source)" => "SDK",
			//"Runtime" => "runtime",
			//"Examples" => "examples",
			//"Automated Tests" => "automated-tests"
		));
	}

	$echo_out_all = "";

	if (!$showBuildResults)
	{
		foreach (array_keys($dls[$proj]) as $z)
		{
			$echo_out_all .= "<li><img src=\"/modeling/images/dl.gif\" alt=\"Download\"/> " . fileFound("$PWD/", "$branch/$ID/", "$z Build Artifacts") . "</li>\n";
			break;
		}
	}
	else
	{
		foreach (array_keys($dls[$proj]) as $z)
		{
			$echo_out = "";
			foreach ($dls[$proj][$z] as $label => $u)
			{
				$cnt++;
				if (!is_array($u)) // for compatibilty with uml2, where there's no "RT" value in $u
				{
					$u = $u ? array("-$u") : array("");
				}

				// support EMF page with three different valid prefixes which can
				// overlap when searched using dynamic check below
				if ($filePreStatic && is_array($filePreStatic) && array_key_exists($proj,$filePreStatic))
				{
					$filePreProj = array($filePreStatic[$proj][$cnt]); // just one value to check
				}

				$tries = array();
				foreach ($u as $ux)
				{
					foreach ($filePreProj as $filePre)
					{
						$tries[] = "$branch/$ID/$pre2$filePre$ux-$ziplabel.zip"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$filePre$ux-$ziplabel.zip"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$pre2$filePre$ux-incubation-$ziplabel.zip"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$filePre$ux-incubation-$ziplabel.zip"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						// -------------------
						$tries[] = "$branch/$ID/$pre2$filePre$ux-$ziplabel.tar.gz"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$filePre$ux-$ziplabel.tar.gz"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$pre2$filePre$ux-incubation-$ziplabel.tar.gz"; // for compatibilty with uml2, where there's no "runtime" value in $ux
						$tries[] = "$branch/$ID/$filePre$ux-incubation-$ziplabel.tar.gz"; // for compatibilty with uml2, where there's no "runtime" value in $ux
					}
				}
				$outNotFound = "<i><b>$pre2</b>$filePre";
				if (sizeof($u) > 1 ) {
					$outNotFound .= "</i>{"; foreach ($u as $ui => $ux) { $outNotFound .= ($ui>0 ? "," : "") . $ux; } $outNotFound .= "}<i>";
				}
				else
				{
					$outNotFound .= $u[0];
				}
				$outNotFound .= "-$ziplabel ...</i>";
				$out = "";
				foreach ($tries as $y)
				{
					if (is_file("$PWD/$y"))
					{
						$out = fileFound("$PWD/", $y, $label);
						break;
					}
				}
				if ($out)
				{
					$echo_out .= "<li>\n";
					$echo_out .= $out;
					$echo_out .= "</li>\n";
				}
				else if (!isset($extraZips) || !is_array($extraZips) || !in_array($filePre . $u[0],$extraZips)) // $extraZips defined in downloads/index.php if necessary
				{
					$echo_out .= "<li>\n";
					$echo_out .= $outNotFound;
					$echo_out .= "</li>\n";
				}
				$uu++;
			}
			if ($echo_out) // if the whole category is empty, don't show it (eg., GEF)
			{
				$echo_out_all .= "<li><img src=\"/modeling/images/dl.gif\" alt=\"Download\"/> $z\n<ul>\n" . $echo_out . "</ul>\n</li>\n";
			}
		}
	}
	return $echo_out_all;
}

/* if $styled = 0 or false, return text only */
function showBuildResults($PWD, $path, $styled=1) // given path to /../downloads/drops/M200402021234/
{
	global $downloadPre, $pre, $isBuildServer, $doRefreshPage, $numzips, $PR, $PR_www, $projct, $isBuildDotEclipseServer, $isTech, $isTools;
	$PR2 = ($isTools ? "tools/$PR" : ($isTech ? "technology/$PR" : "$PR_www")); # to allow for www.eclipse.org/gef/ and download.eclipse.org/tools/gef
	$mid = "$downloadPre/$PR" . ($projct == "" ? $projct : "/$projct") . "/downloads/drops/";
	$out = "";
	$buildlog = "$PWD${path}buildlog.txt";
	$buildlog_cache = null;
	clearstatcache();

	$warnings = 0;
	$errors = 0;
	$failures = 0;
	$didnotruns = 0;

	$result = "";
	$icon = "";

	$indexHTML = "";
	$compilelogSummary = "";

	$link = "";
	$link2 = "";

	$ID = substr($path, -14);
	if (is_file("${path}testing/${ID}testing/linux.gtk_consolelog.txt")) // testing or perhaps failed and didn't clean up
	{
		$icon = "check-maybe";
		$conlog = "${path}testing/${ID}testing/linux.gtk_consolelog.txt";
		$testlog = ($isBuildServer ? "" : "http://www.eclipse.org") . "/$PR_www/downloads/testResults.php?hl=1&amp;project=$projct&amp;ID=" . substr($path, 0, strlen($path) - 1);
		$link = ($isBuildServer && !$isBuildDotEclipseServer ? "/$PR/build/log-viewer.php?" . ($isTools ? "tools&" : ($isTech ? "technology&" : "")) . "project=$projct&amp;build=$path" :
				($isBuildServer ? "" : "http://download.eclipse.org/") . $mid.$path."buildlog.txt");
		$link2 = (is_file("$PWD$conlog") ? "$mid$conlog" : (is_file("$PWD$testlog") ? "$testlog" : $link));
		$result = (is_file("$PWD$conlog") ? "Testing..." : $result);
	}

	if (!$icon && $isBuildServer && is_file($buildlog)) // if the log's too big, don't open it!
	{
		$buildlog_cache = (isset($buildlog_cache) && $buildlog_cache) ? $buildlog_cache : loadFile($buildlog);
		if (grep("/BUILD FAILED/", $buildlog, $buildlog_cache))
		{
			$icon = "not";
			$result = "FAILED"; // BUILD
		}
	}

	if (!$icon && (is_file("$PWD${path}index.html") || is_file("$PWD${path}index.php")))
	{
		$indexHTML = is_file("$PWD${path}index.html") ? file_get_contents("$PWD${path}index.html") : "";
		$zips = loadDirSimple($PWD . $path, "(\.zip|\.tar\.gz)", "f"); // get files count
		$md5s = is_dir($PWD . $path . "/checksum") ? loadDirSimple($PWD . $path . "/checksum", "(\.zip\.md5|\.tar\.gz\.md5)", "f") :
			loadDirSimple($PWD . $path, "(\.zip\.md5|\.tar\.gz\.md5)", "f"); // get files count

		if ((sizeof($zips) >= $numzips && sizeof($md5s) >= $numzips))
		{
			//check testresults/chkpii/ for results
			if (is_file("$PWD${path}testresults/chkpii/org.eclipse.nls.summary.txt"))
			{
				$chkpiiResults = file_get_contents("$PWD${path}testresults/chkpii/org.eclipse.nls.summary.txt");
				// eg, file contains:
				//htm: 6 E, 0 W
				//xml: 1 E, 1 W
				//properties: 0 E, 2 W
				$regs = null;
				preg_match_all("/^\S+: (\d+) E, (\d+) W$/m", $chkpiiResults, $regs);
				for ($i = 0; $i < sizeof($regs[0]); $i++)
				{
					$errors += $regs[1][$i];
					$warnings += $regs[2][$i];
					$icon = "not";
					$link = "$pre$mid${path}testresults/chkpii/";
					$link2 = "$pre$mid${path}testresults/chkpii/";
				}
			}

			// check JUnit results
			$files = loadDirSimple("$PWD${path}testresults/xml/", ".xml", "f");
			$out = "";
			$noProblems = true;
			foreach ($files as $file)
			{
				// XXX "/home/data2/httpd/download.eclipse.org" didn't work
				$testFilePath = "/home/data/httpd/download.eclipse.org/modeling/mdt/modisco/downloads/drops/${path}testresults/xml/" . $file;
				//echo "testFilePath=$testFilePath ";
				//echo "PWD=$PWD ";

				$results = getTestResultsJUnitXML("$PWD${path}testresults/xml/" . $file);
				if ($results && is_array($results))
				{
					$errors += $results[0];
					$failures += $results[1];
					$didnotruns += $results[2];
					$icon = "not";
					$results = null;
				}
			}

			//check compilelogs/summary.txt for results
			if (is_file("$PWD${path}compilelogs/summary.txt"))
			{
				$compilelogSummary = file_get_contents("$PWD${path}compilelogs/summary.txt");
				$link2 = ($isBuildServer ? "" : "http://www.eclipse.org") . "/$PR_www/downloads/testResults.php?hl=1&amp;project=$projct&amp;ID=" . substr($path, 0, strlen($path) - 1);
				if ($compilelogSummary)
				{
					$m = null;
					if (preg_match("/(\d+)P, (\d+)W, (\d+)E, (\d+)F/", $compilelogSummary, $m))
					{
						$warnings += $m[2];
						$errors += $m[3];
						$failures += $m[4];
					}
				}
			}

			/*if ($errors)
			{
				$icon = "not";
				$result = "ERROR";
			}
			else*/
			if ($didnotruns)
			{
				$icon = "not";
				$result = "CAUTION";
			}
			else
			{
				$icon = ($warnings ? "check-maybe" : "check");
				$result = "";
			}

			//parse out the check/fail icons in index.html, if we haven't failed already
			if ($icon != "not" && $indexHTML)
			{
				if (preg_match("/<font size=\"-1\" color=\"#FF0000\">skipped<\/font>/", $indexHTML))
				{
					// XXX no tests for now, that's normal
					$icon = "check";
					$result = "";
					//$icon = "check-maybe";
					//$result = "Skipped ";
				}
				else if (preg_match("/(?:<!-- Examples -->.*FAIL\.gif|FAIL\.gif.*<!-- Automated Tests -->)/s", $indexHTML))
				{
					$icon = "not";
					$result = "FAILED ";
				}
				else if (preg_match("/<!-- Automated Tests -->.*FAIL\.gif.*<!-- Examples -->/s", $indexHTML))
				{
					$icon = "check-tests-failed";
					$result = "TESTS FAILED ";
				}
			}
		}
	}

	if (!$icon)
	{
		// display in progress icon & link to log
		$result = "...";
		$icon = "question";
	}

	clearstatcache();
	if ($isBuildServer && $icon == "question" && is_file($buildlog))
	{
		$buildlog_cache = (isset($buildlog_cache) && $buildlog_cache) ? $buildlog_cache : loadFile($buildlog);
		if ($isBuildServer && grep("/\[start\] start\.sh finished on: /", $buildlog, $buildlog_cache))
		{
			$icon = "not"; //display failed icon - not in progress anymore!
			$result = "FAILED"; // BUILD
		}

		if ($result != "FAILED" && strtotime("now") - filemtime($buildlog) < 7200)
		{
			$doRefreshPage = true;
		}
		else
		{
			$mightHavePassed = false;
			if (grep("/BUILD SUCCESSFUL/", $buildlog, $buildlog_cache))
			{
				$mightHavePassed = true;
			}
			else if (grep("/BUILD FAILED/", $buildlog, $buildlog_cache))
			{
				$icon = "not"; //display failed icon
				$result = "FAILED"; // BUILD
			}

			if ($result != "FAILED" && $mightHavePassed)
			{
				$icon = "check-maybe";
				$result = "Stalled!";
			}
			else if ($result != "FAILED" && !$mightHavePassed)
			{
				$icon = "not";
				$result = "FAILED";
			}
		}
	}

	if (!$result && !is_dir("$PWD${path}testresults/xml/"))
	{
		$result = "Skipped ";
		$icon = "check-maybe";
	}

	if (!$link) // return a string with icon, result, and counts (if applic)
	{
		$link = ($isBuildServer && !$isBuildDotEclipseServer ? "/$PR/build/log-viewer.php?" . ($isTools ? "tools&" : ($isTech ? "technology&" : "")) . "project=$projct&amp;build=$path" :
				($isBuildServer ? "" : "http://download.eclipse.org/") . $mid.$path."buildlog.txt");
	}

	/*if (!$link2) // link to console log in progress if it exists
	{
		$ID = substr($path, -14);
		$conlog = "${path}testing/${ID}testing/linux.gtk_consolelog.txt";
		$testlog = ($isBuildServer ? "" : "http://www.eclipse.org") . "/$PR2/downloads/testResults.php?hl=1&amp;project=$projct&amp;ID=" . substr($path, 0, strlen($path) - 1);
		$link2 = (is_file("$PWD$conlog") ? "$mid$conlog" : (is_file("$PWD$testlog") ? "$testlog" : $link));
		$result = (is_file("$PWD$conlog") ? "Testing..." : $result);
	}*/


	$htmlTestResultsDir = substr($path, 0, strlen($path) - 1) . "/testresults/html";
	if(is_file($PWD.$htmlTestResultsDir."/0_AllTests.html")) {
		$link2 = "http://download.eclipse.org/modeling/mdt/modisco/downloads/drops/".$htmlTestResultsDir."/0_AllTests.html";
	} else {
		$link2 = "http://download.eclipse.org/modeling/mdt/modisco/downloads/drops/".$htmlTestResultsDir;
	}

	if ($styled)
	{
		$out .= "<a " .
			(preg_match("/FAIL|CAUTION|ERROR/", $result) || $didnotruns > 0 || $errors > 0 || $failures > 0 ? "class=\"fail\" " :
				(preg_match("/Testing|Stalled|Skipped/",$result) || $warnings > 0 ? "class=\"warning\" " :
					"class=\"success\" ") ) .
			"href=\"$link2\">$result";
	}
	else
	{
		$out .= (preg_match("/FAIL|CAUTION|ERROR/", $result) || $didnotruns > 0 || $errors > 0 || $failures > 0 ? "FAILURE / " :
				(preg_match("/Testing|Stalled|Skipped/",$result) || $warnings > 0 ? "WARNING / " :
					"SUCCESS / ") ) .
			"$result";
	}
	if ($errors == 0 && $failures == 0 && $warnings == 0 && !$result)
	{
		$out .= "OK";
	}
	else
	{
		$out  .= ($result && $result != "..."  && $result != "Skipped" ? ": " : "");
		$out2  = "";
		$out2 .= ($didnotruns > 0 ? "$didnotruns D N R, " : "");
		$out2 .= ($errors > 0 ? "$errors E, " : "");
		$out2 .= ($failures > 0 ? "$failures F, " : "");
		$out2 .= ($warnings > 0 ? "$warnings W" : "");
		$out  .= preg_replace("/^(.+), $/","$1",$out2);
	}
	if ($styled)
	{
		$out .= "</a> <a href=\"$link\"><img src=\"/modeling/images/$icon.gif\" alt=\"$icon\"/></a>";
	}

	$replacements = array(
		"SUCCESS / Success" => "SUCCESS",
		"SUCCESS / ..." => "UNKNOWN",
		"FAILURE / FAILED: " => "FAILED"
	);
	foreach ($replacements as $match => $replace)
	{
		if ($out == $match) $out = $replace;
	}

	return $isBuildServer ?
		array(
			preg_replace("#^/modeling/#", "http://" . $_SERVER["SERVER_NAME"] . "/modeling/", $out),
			"http://" . $_SERVER["SERVER_NAME"] . $link2,
			"http://" . $_SERVER["SERVER_NAME"] . $link
		) :
		array(
			$out,
			$link2,
			$link
		);
}

function fileFound($PWD, $url, $label, $md5AlignRight = true, $icon = null)
{
	global $isBuildServer, $downloadScript, $downloadPre, $PR, $proj, $isTools, $isTech;

	$out = "";
	$mid = "$downloadPre/" . ($isTools ? "tools/$PR" : ($isTech ? "technology/$PR" : "$PR$proj")) . "/downloads/drops/"; // new for www.eclipse.org centralized download.php script
	$md5files = array("$url.md5", preg_replace("#/([^/]+$)#", "/checksum/$1", $url) . ".md5");
	foreach ($md5files as $md5file)
	{
		if (is_file($PWD.$md5file))
		{
			$out .= ($md5AlignRight ? "<div>" : "&nbsp;&nbsp;") . pretty_size(filesize("$PWD$url")) . " (<a href=\"" . ($isBuildServer ? "" : "http://download.eclipse.org") .
"$mid$md5file\">md5</a>)" . ($md5AlignRight ? "</div>" : ""); break;
		}
	}
	return $md5AlignRight ? $out . "<a href=\"$downloadScript$mid$url\">$label</a>" :
		"<a href=\"$downloadScript$mid$url\">$icon</a>&nbsp;<a href=\"$downloadScript$mid$url\">$label</a>" . $out;
}

function doNLSLinksList($packs, $cols, $subcols, $packSuf, $folder, $isArchive = false)
{
	global $downloadScript, $downloadPre, $PR, $proj, $projct;

	foreach ($packs as $name => $packPre)
	{
		foreach ($cols as $alt => $packMid)
		{
			print "<li><img src=\"/modeling/images/dl.gif\" alt=\"$alt\"/> $alt: ";
			$ret = array();
			if (sizeof($subcols) > 2)
			{
				print "<ul>\n";
				$cnt = 0;
				foreach ($subcols as $alt2 => $packMid2)
				{
					if ($cnt > 0 && $cnt % 2 == 0)
					{
						print "<li>" . join(", ", $ret) . "</li>\n";
						$ret = array();
					}
					$ret[] = "<a href=\"" . ($isArchive ? "http://archive.eclipse.org" : $downloadScript) .
						"$downloadPre/$PR$proj/downloads/drops/$folder$packPre$packMid-$packMid2$packSuf\">$alt2</a>";
					$cnt++;
				}
				if (sizeof($ret) > 0)
				{
					print "<li>" . join(", ", $ret) . "</li>\n";
				}
				print "</ul>\n";
			}
			else
			{
				foreach ($subcols as $alt2 => $packMid2)
				{
					$ret[] = "<a href=\"" . ($isArchive ? "http://archive.eclipse.org" : $downloadScript) .
						"$downloadPre/$PR$proj/downloads/drops/$folder$packPre$packMid-$packMid2$packSuf\">$alt2</a>";
				}
				print join(", ", $ret);
			}
			print "</li>\n";
		}
	}
}

function grep($pattern, $file, $file_cache = null)
{
	$filec = $file_cache ? $file_cache : loadFile($file);

	foreach ($filec as $z)
	{
		if (preg_match($pattern, $z))
		{
			$filec = array();
			return true;
		}
	}

	$filec = array();
	return false;
}

function loadFile($file)
{
	$maxfilesize = 64*1024; // 64K file limit
	$filec = array();
	if (is_file($file) && is_readable($file))
	{
		if (filesize($file) < ($maxfilesize))
		{
			$filec = file($file);
		}
		else
		{
			exec("tail -n50 $file", $filec); // just grab the last n lines
		}
	}

	return $filec;
}

/* if $styled = 0 or false, return text only */
function getExtraTestsResults($branch, $ID, $styled=1)
{
	global $isBuildServer, $jdk14testsPWD, $jdk50testsPWD, $jdk60testsPWD, $testsPWD;
	$tests = "";
	$s = array(0 => "");
	$t = array(0 => "");
	if ($isBuildServer && function_exists("getJDKTestResults") && function_exists("getOldTestResults"))
	{
		if (isset($jdk14testsPWD) && $jdk14testsPWD && is_dir($jdk14testsPWD))
		{
			$summary = "";
			$tests = getJDKTestResults("$jdk14testsPWD/", "$branch/$ID/", "jdk14", $summary) . "\n";
			if (!$styled)
			{
				$summary = toPlainTextSummaries($summary);
				$s[0] .= $summary[0];
				$t[0] .= $summary[1];
			}
			else
			{
				$s[] = $summary;
			}
		}
		if (isset($jdk50testsPWD) && $jdk50testsPWD && is_dir($jdk50testsPWD))
		{
			$summary = "";
			$tests .= getJDKTestResults("$jdk50testsPWD/", "$branch/$ID/", "jdk50", $summary) . "\n";
			if (!$styled)
			{
				$summary = toPlainTextSummaries($summary);
				$s[0] .= $summary[0];
				$t[0] .= $summary[1];
			}
			else
			{
				$s[] = $summary;
			}
		}
		if (isset($jdk60testsPWD) && $jdk60testsPWD && is_dir($jdk60testsPWD))
		{
			$summary = "";
			$tests .= getJDKTestResults("$jdk60testsPWD/", "$branch/$ID/", "jdk60", $summary) . "\n";
			if (!$styled)
			{
				$summary = toPlainTextSummaries($summary);
				$s[0] .= $summary[0];
				$t[0] .= $summary[1];
			}
			else
			{
				$s[] = $summary;
			}
		}
		if (isset($testsPWD) && $testsPWD && is_dir($testsPWD))
		{
			$summary = "";
			$tests .= getOldTestResults("$testsPWD/", "$branch/$ID/", $summary) . "\n";
			if (!$styled)
			{
				$summary = toPlainTextSummaries($summary);
				$s[0] .= $summary[0];
				$t[0] .= $summary[1];
			}
			else
			{
				$s[] = $summary;
			}
		}
	}
	return array($s, $t, $tests);
}

function toPlainTextSummaries($summary)
{
	global $debug, $PR, $projct;
	if ($debug > 0) print htmlspecialchars($summary)."<br/>";

	$miniSummary  = "";
	$textSummary  = "";
	// <a href="/modeling/emf/build/log-viewer.php?jdk50test=2.2.4/R200710030400/200710030422/" class="warning">511 W, 3 D</a>
	// <a href="/modeling/emf/build/log-viewer.php?jdk50test=2.2.4/R200710030400/200710030422/"><img src="/modeling/images/check.gif" alt="OK"/></a>
	// <a href="/modeling/emf/build/log-viewer.php?jdk50test=2.4.0/N200712241351/200712241410/">...</a>
	$pattern = "#<a href=\"[^\"]+\?([^\"]+)=([^\"]+)\"(| class=\"[^\"]+\")>([^<]+)</a>#";
	preg_match_all($pattern, $summary, $out, PREG_SET_ORDER);
	/* [1] => jdk50test
	   [2] => /modeling/emf/build/log-viewer.php?jdk50test=2.2.4/R200710030400/200710030422/
       [4] => 511 W, 3 D
    */
    if (sizeof($out) > 0)
    {
	    if ($debug > 0) { print "\n-------1-------\n<br/><pre>"; print_r($out); print "</pre><br/>\n"; }
    	foreach ($out as $set)
    	{
    		$url = "http://" . $_SERVER["SERVER_NAME"] . "/" . $PR . "/" . $projct . "/" . $set[1] . "s/" . $set[2] . "testlog.txt";
    		$miniSummary .= " [" . strtoupper(str_replace("test", "", $set[1])) . ": " . $set[4] . "]";
    		$textSummary .= strtoupper(str_replace("test", "", $set[1])) . " Test (" . $set[4] . ")\t" . $url . "\n";
    	}
    }

	$patterns = array(
		// <a href="../../../modeling/emf/tests/2.2.4/R200710030400/200710030422/results/svt.html"><img src="/modeling/images/check.gif" alt="OK"/></a>
		"#<a href=\"([^\"]+/results/([^\"]+).html)\"><img src=\"[^\"]+/images/[^\"]+.gif\" alt=\"([^\"]+)\"\/></a>#",

		// <a href="../../../modeling/emf/tests/2.2.4/R200710030400/200710030432/results/svt.html" class="fail">1 F</a>
		"#<a href=\"([^\"]+/results/([^\"]+).html)\" class=\"[^\"]+\">([^\<]+)</a>#",
	);

	$failedPattern =
	 	// <a href="../../../modeling/emf/tests/2.4.0/N200712241351/200712241410/testlog.txt"><img src="/modeling/images/not.gif" alt="FAILED"/></a>
		"#<a href=\"([^\"]+/modeling/emf/(tests)/[^\"]+)\"><img src=\"[^\"]+/images/[^\"]+.gif\" alt=\"([^\"]+)\"\/></a>#"
	;

	$foundURLs = array();
	foreach ($patterns as $pattern)
	{
    	$set = null;
		$out = array();
		$outFail = array();
		preg_match_all($pattern, $summary, $out, PREG_SET_ORDER);
		preg_match_all($failedPattern, $summary, $outFail, PREG_SET_ORDER);
		/* [1] => ../../../modeling/emf/tests/2.2.4/R200710030400/200710030422/results/bvt.html
	       [2] => bvt
	       [3] => OK
	    */
    	$sets = sizeof($out) > 0 ? $out : $outFail;
	    if ($debug > 0) { print "\n-------2-------\n<br/><pre>"; print_r($sets); print "</pre><br/>\n"; }
    	foreach ($sets as $set)
    	{
    		if (!in_array($set[1], $foundURLs)) {
    			$foundURLs[] = $set[1];
    			$url = str_replace("../../..", "http://" . $_SERVER["SERVER_NAME"], $set[1]);
	    		$miniSummary .= " [" . strtoupper($set[2]) . ": " . $set[3] . "]";
	    		$textSummary .= strtoupper($set[2]) . " Test (" . $set[3] . ")\t" . $url . "\n";
    		}
    	}
	}

	return array($miniSummary,$textSummary);
}

function outputBuild($branch, $ID, $c)
{
	global $PWD, $isBuildServer, $dls, $filePre, $proj, $showBuildResults, $sortBy, $projct, $jdk14testsPWD, $jdk50testsPWD, $jdk60testsPWD, $testsPWD, $deps, $PR, $hiddenBuilds;

	# suppress hidden builds for public server
	if (!$isBuildServer)
	{
		foreach ($hiddenBuilds as $hb) {
			if (trim($hb) == "$PR/$branch/$ID")
			{
				debug("Build $PR/$branch/$ID is hidden, pending mirror replication.", 1);
				return "";
			}
		}
	}
	$pre2 = (is_dir("$PWD/$branch/$ID/eclipse/$ID/") ? "eclipse/$branch/$ID/" : "");

	$zips_in_folder = loadDirSimple("$PWD/$branch/$ID/", "(\.zip|\.tar\.gz)", "f");
	$ziplabel = (sizeof($zips_in_folder) < 1) ? $ID :
		preg_replace("/(.+)\-([^\-]+)(\.zip|\.tar\.gz)/", "$2", $zips_in_folder[0]); // grab first entry

	// generalize for any relabelled build, thus 2.0.1/M200405061234/*-2.0.2.zip is possible; label = 2.0.2
	$IDlabel = $ziplabel;

	$opts = loadBuildConfig("$PWD/$branch/$ID/build.cfg", $deps);

	$ret = "<li>\n";
	$buildResults = $showBuildResults ? showBuildResults("$PWD/", "$branch/$ID/") : array("");
	$extraTestsResults = $showBuildResults ? getExtraTestsResults($branch, $ID) : array(array(), "", "");
	$ret .= "<div>" . $buildResults[0] .  join("", preg_replace("/^(.+)$/", "<span>$1</span>", $extraTestsResults[0])) . "</div>";
	$ret .= "<a href=\"javascript:toggle('r$ID')\">" .
		"<i>" . ($sortBy == "date" && $IDlabel != $branch ? "$branch / " : "") . "$IDlabel</i> " .
		"(" . IDtoDateStamp($ID, 2) . ")" .
		"</a>" .
		"<a name=\"$ID\"></a> " .
		"<a href=\"?showAll=1&amp;hlbuild=$ID" .
		($sortBy == "date" ? "&amp;sortBy=date" : "") .
		"&amp;project=$projct#$ID\">" .
		"<img alt=\"Link to this build\" src=\"/modeling/images/link.png\"/>" .
		"</a>" .
		((isset($opts["noclean"]) && $opts["noclean"]) || is_dir("$PWD/$branch/$ID/eclipse/$ID") ? doNoclean("$PWD/$branch/$ID") : "");

	//$ret .= "<ul id=\"r$ID\"" . (($c == 0 && !isset($_GET["hlbuild"])) || isset($_GET["hlbuild"]) && $ID == $_GET["hlbuild"] ? "" : " style=\"display: none\"") . ">\n";
	$ret .= "<ul id=\"r$ID\"" . (isset($_GET["hlbuild"]) && $ID == $_GET["hlbuild"] ? "" : " style=\"display: none\"") . ">\n";

	if (!isset($filePre[$proj]) && isset($filePre["/"]))
	{
		$filePre[$proj] = $filePre["/"];
	}
	if (!isset($filePre[$proj]))
	{
		$topProj = preg_replace("#.+/(.+)#","$1", $PR);
		$filePre[$proj] = $topProj == "emft" ?
			array("emft-" . $projct, "emf-" . $projct) :
			array($topProj . "-" . $projct);
	}
	$ret .= createFileLinks($dls, $PWD, $branch, $ID, $pre2, $filePre[$proj], $ziplabel);

	$ret .= $extraTestsResults[2];
	$ret .= getBuildArtifacts("$PWD", "$branch/$ID");
	$ret .= "</ul>\n";
	$ret .= "</li>\n";

	return $ret;
}

function doNoclean($dir)
{
	global $PR,$projct;
	$sizeondisk = pretty_size(dirsize($dir));
	$versionAndBuildID = explode("/",$dir); $versionAndBuildID = $versionAndBuildID[sizeof($versionAndBuildID) - 2] . "/" . $versionAndBuildID[sizeof($versionAndBuildID) - 1];
	return " <a href=\"/$PR/$projct/build/clean.php?versionAndBuildID=$versionAndBuildID\"><span class=\"noclean\"><acronym title=\"Failed builds do not purge temp files automatically -- click here to do so!\">Size on disk: $sizeondisk</acronym></span>" .
		   " <img alt=\"Purge releng materials before promoting this build!\" src=\"/modeling/images/bug.png\"/></a>";
}

function loadBuildConfig($file, $deps)
{
	$lines = (is_file($file) && is_readable($file) ? file($file) : array());

	$opts = array();
	foreach ($lines as $z)
	{
		$regs = null;
		// Modeling build style
		if (preg_match("/^((?:" . join("|", array_keys($deps)) . ")(?:DownloadURL|File|BuildURL))=(.{2,})$/", $z, $regs))
		{
			$opts[$regs[1]] = $regs[2];
		}
		// Athena build style
		else if (preg_match("/^(.+\.download\.url|.+\.file|.+\.buildurl)=(.{2,})$/", $z, $regs))
		{
			#print "[ " . $regs[1] . " = " . $regs[2] . " ]<br/>";
			$opts[$regs[1]] = $regs[2];
		}
		else if (preg_match("#^(buildAlias|noclean)=(.+)$#", $z, $regs))
		{
			$opts[$regs[1]] = trim($regs[2]);
		}
		else if (preg_match("#^(javaHome|JAVA_HOME|java.home)=(.+)$#", $z, $regs))
		{
			# TODO: change this to an exec to use java --version instead
			# TODO: why is build.cfg not being found?
			$rp = realpath($regs[2]);
			$opts[$regs[1]] = ($rp && $rp != $regs[2] ? preg_replace("#.+/([^/]+)#", "$1", $regs[2]) . " (" . preg_replace("#.+/([^/]+)#", "$1", $rp) . ")" : preg_replace("#.+/([^/]+)#", "$1", $regs[2]));
		}
	}
	return $opts;
}

function getBuildArtifacts($dir, $branchID)
{
	//echo "getBuildArtifacts dir=$dir branchID=$branchID";

	global $isBuildServer, $downloadPre, $PR, $PR_www, $deps, $proj, $projct, $isTools, $isTech;

	$PR2 = ($isTools ? "tools/$proj" : ($isTech ? "technology/$proj" : "$PR" . ($proj != "/" ? $proj : ""))); # to allow for www.eclipse.org/gef/ and download.eclipse.org/tools/gef, but also modeling/emf
	$mid = "$downloadPre/$PR2" . "/downloads/drops/";
	$file = "$dir/$branchID/build.cfg";
	$havedeps = array();
	$opts = loadBuildConfig($file, $deps);

	// Modeling build style
	foreach (array_keys($deps) as $z)
	{
		$builddir[$z] = (isset($opts["${z}DownloadURL"]) ? $opts["${z}DownloadURL"] : ""). (isset($opts["${z}BuildURL"]) ? $opts["${z}BuildURL"] : ""); if ($builddir[$z] == "/downloads") { $builddir[$z] = null; }
		# Eclipse: R-3.2.1-200609210945 or S-3.3M2-200609220010 or I20060926-0935 or M20060919-1045
		# Other: 2.2.1/R200609210005 or 2.2.1/S200609210005
		$buildID[$z] = isset($opts["${z}BuildURL"]) ? str_replace("/", " ", preg_replace("/.+\/drops\/(.+)/", "$1", $opts["${z}BuildURL"])) : "";
		$buildfile[$z] = $builddir[$z] . "/" . (isset($opts["${z}File"]) ? $opts["${z}File"] : "");
		$builddir[$z] = $builddir[$z] ? (!preg_match("/^http/", $builddir[$z]) ? getDownloadScript() . "$builddir[$z]" : $builddir[$z]) : "";
		$buildfile[$z] = (!preg_match("/^http/", $buildfile[$z]) ? getDownloadScript() . "$buildfile[$z]" : $buildfile[$z]);
		if ($builddir[$z]) {
		    $havedeps[$z] = $z;
		}
	}

	// Athena build style
	$eclipseDownloadURL=$opts["eclipse.download.url"];
	foreach (array_keys($opts) as $y)
	{
		preg_match("/^(.+)\.buildurl$/", $y, $regs); $z = $regs[1];
		if ($z)
		{
			$builddir[$z] = $eclipseDownloadURL. (isset($opts["${z}.buildurl"]) ? $opts["${z}.buildurl"] : ""); if ($builddir[$z] == "/downloads") { $builddir[$z] = null; }
			# Eclipse: R-3.2.1-200609210945 or S-3.3M2-200609220010 or I20060926-0935 or M20060919-1045
			# Other: 2.2.1/R200609210005 or 2.2.1/S200609210005
			$buildID[$z] = isset($opts["${z}.buildurl"]) ? str_replace("/", " ", preg_replace("/.+\/drops\/(.+)/", "$1", $opts["${z}.buildurl"])) : "";
			$buildfile[$z] = $builddir[$z] . "/" . (isset($opts["${z}.file"]) ? $opts["${z}.file"] : "");
			$builddir[$z] = $builddir[$z] ? (!preg_match("/^http/", $builddir[$z]) ? getDownloadScript() . "$builddir[$z]" : $builddir[$z]) : "";
			$buildfile[$z] = (!preg_match("/^http/", $buildfile[$z]) ? getDownloadScript() . "$buildfile[$z]" : $buildfile[$z]);
			if ($builddir[$z]) {
			    $havedeps[$z] = $z;
			}
		}
	}

	$ret = "";

	if (is_array($havedeps))
	{
		$details = array(
			"Config File" => "build.cfg",
			"Map File" => "directory.txt",
			"Build Log" => "buildlog.txt",
			"API report" => "api_report/html/index.html"
		);

		$link = ($isBuildServer ? "" : "http://download.eclipse.org");

		/*
		$ret .= "<li>\n";
		$ret .= "<img src=\"/modeling/images/dl-deps.gif\" alt=\"Upstream dependencies used to build this driver\"/> Build Dependencies\n";
		$ret .= "<ul>\n";
		if (sizeof($opts) > 0)
		{
			$ret .= (isset($opts["javaHome"]) && $opts["javaHome"] ? "<li>" . ucwords(str_replace("-", " ", $opts["javaHome"])) . "</li>" :
						(isset($opts["JAVA_HOME"]) && $opts["JAVA_HOME"] ? "<li>" . ucwords(str_replace("-", " ", $opts["JAVA_HOME"])) . "</li>" :
							(isset($opts["java.home"]) && $opts["java.home"] ? "<li>" . ucwords(str_replace("-", " ", $opts["java.home"])) . "</li>" : "")
						)
					);
			foreach (array_keys($havedeps) as $z)
			{
				$vanity = $buildID[$z];
				preg_match("/.+-(incubation-|sdk_|)([^-]+)(\.zip|\.tar\.gz)/", $buildfile[$z], $reg);
				if ($reg && is_array($reg) && sizeof($reg) > 0) {
					$vanity = $buildID[$z];
					$vanity = preg_replace("#(-|_|sdk_)+#"," ",$vanity);
					$vanity = preg_replace("#(.+ downloads|downloads)+#"," ",$vanity);
					$vanity = trim(preg_replace("/(\d+\.\d+|\d+\.\d+\.\d+) ([NIMRS]\d+)/","$2",$vanity));
					if ($vanity != $reg[2])
					{
						$vanity = str_replace("_"," ",$reg[2]) . " " . $vanity;
					}
				}
				if ($vanity == " downloads") {
					$vanity="";
				}

				# trim duplicate information
				$vanity = preg_replace("#incubation#","",$vanity);
				$vanity = preg_replace("#( \d+\.\d+ )#"," ",$vanity);
				$vanity = preg_replace("#( [IMNRS] )#"," ",$vanity);
				# tokenize and reassemble, avoiding dupes
				$vanityBits = explode(" ",trim($vanity));
				$vanity=""; foreach ($vanityBits as $vb){ if ($vb && false===strstr($vanity,$vb)){ $vanity.=" $vb"; } }

				$bf = array();
				if (preg_match("#(.+)/orbitBundles-(.+).map$#", $buildfile[$z], $bfbits))
				{
					$bf[] = $bfbits[1] . "/orbit-" . $bfbits[2] . ".zip";
					$bf[] = $buildfile[$z]; // map
				}
				else if (preg_match("#(.+)/orbit-(.+).zip$#", $buildfile[$z], $bfbits))
				{
					$bf[] = $buildfile[$z]; // zip
					$bf[] = $bfbits[1] . "/orbitBundles-" . $bfbits[2] . ".map";
				}
				$ret .= "<li>".($builddir[$z]?"<div><a href=\"$builddir[$z]\">Build Page</a></div>":""). ($deps[$z]?$deps[$z]:ucwords(str_replace("."," ",$z))) . " " .
					($z == "orbit" ? "<a href=\"{$bf[0]}\">$vanity</a> (<a href=\"{$bf[1]}\">map</a>)" : "<a href=\"{$buildfile[$z]}\">$vanity</a>") .
				"</li>\n";
			}
		}
		else
		{
			$ret .= "<li><i>Missing or empty build.cfg!</i></li>\n";
		}
		$ret .= "</ul>\n";
		$ret .= "</li>\n";
		*/

		$ret .= "<li>\n";
		$ret .= "<img src=\"/modeling/images/dl-more.gif\" alt=\"More info about this build\"/> Build Details\n";
		$ret .= "<ul>\n";

		$version = (isset($opts["buildAlias"]) ? $opts["buildAlias"] : (preg_match("#(.+)/([IM]\d+)#", $branchID, $matches) ? $matches[2]: "HEAD"));
		//$ret .= "<li><a href=\"http://www.eclipse.org/$PR/news/relnotes.php?project=$projct&amp;version=$version\">Changes In This Build</a></li>\n";
		//$ret .= "<li><a href=\"" . ($isBuildServer ? "" : "http://www.eclipse.org") . "/$PR_www/downloads/testResults.php?hl=1&amp;project=$projct&amp;ID=$branchID\">Test Results &amp; Compile Logs</a></li>\n";
		$details2 = array();
		foreach (array_keys($details) as $label)
		{
			if (is_file("$dir/$branchID/" . $details[$label]))
			{
				$details2[$label] = preg_replace("/^(.+)$/", "<a href=\"$link$mid$branchID/$1\">$label</a>", $details[$label]);
			}
		}
		$details = $details2; unset($details2);
		$ret .= "<li>" . join(", ", $details) . "</li>\n";
		$ret .= "</ul>\n";
		$ret .= "</li>\n";
	}
	return $ret;
}

function showToggle($showAll, $showMax, $sortBy, $count)
{
	global $projct;
	$ret = "<li><a href=\"" . $_SERVER["PHP_SELF"] . "?project=".$projct."&amp;showAll=" . ($showAll == "1" ? "" : "1") . "&amp;showMax=$showMax&amp;sortBy=$sortBy\">" . ($showAll != "1" ? "show all $count" : "show only $showMax") . "...</a></li>\n";
	return $ret;
}

function showArchived($oldrels)
{
	global $PR, $proj;

	$thresh = sizeof($oldrels) > 5 ? ceil(sizeof($oldrels)/3) : 6;
	print "<div class=\"homeitem3col\">\n";
	print "<h3><a name=\"archives\"></a>Archived Releases</h3>\n";
	print "<p>Older " . project_name($proj) . " releases have been moved to archive.eclipse.org, and can be accessed here:</p>";
	print '<table cellspacing="0" cellpadding="0" border="0" style="margin:0"><tr valign="top">'."\n";
	print "<td><ul id=\"archives\">\n";
	$cnt=-1;
	foreach (array_keys($oldrels) as $z)
	{
		$cnt++;
		if ($cnt % $thresh == 0)
		{
			print "</ul></td><td><ul id=\"archives\">\n";
		}
		if (!$z || $oldrels[$z] === null)
		{
			$cnt--; # spacer
		}
		else if (!is_array($oldrels[$z]))
		{
			print "<li style=''><a href=\"http://archive.eclipse.org/$PR$proj/downloads/drops/$z/R$oldrels[$z]/\">$z</a> (" . IDtoDateStamp($oldrels[$z], 2) . ")</li>\n";
		}
		else // optional syntax with hardcoded datestamp and URL, like for old EMF/SDO/XSD 1.x builds
		{
			print "<li><a href=\"" . $oldrels[$z][1] . "\">$z</a> (" . $oldrels[$z][0] . ")</li>\n";
		}
	}
	print "</ul>\n";
	print "</td>";
	print "</tr></table>\n";
	print "</div>\n";
}

function getTestResultsJUnitXML($file)
{
	$result = array(0, 0, 0); # Errors, Failures, DNRs

	//$data = file($file);
	//exec("head -3 $file | grep \"<testsuite\"", $data); // possibly faster than file($file), but might break on some servers (eg., exec() is disabled on www.eclipse.org, so warnings are thrown)

	$handle = @fopen($file, "r");
	if ($handle) {
	    while (!feof($handle)) {
	        $line = fgets($handle, 4096);

       		// <testsuite errors="0" failures="0" ...>
			$matches = null;
			if (preg_match("/errors=\"(\d+)\" failures=\"(\d+)\"/", $line, $matches))
			{
				$result = array($matches[1], $matches[2], 0);
			}
			else if (preg_match("/failures=\"(\d+)\" errors=\"(\d+)\"/", $line, $matches))
			{
				$result = array($matches[2], $matches[1], 0);
			}
			else if (false!==strpos($line,"<testsuites/>") || false!==strpos($line,"<testsuites />") || false!==strpos($line,"<testsuites></testsuites>") || false!==strpos($line,"Failed to invoke suite")) // no tests run!
			{
				$result = array(0, 0, 1);
			}
	    }
	    fclose($handle);
	} else {
		echo "ERROR opening \"$file\"";
	}

	return $result;
}
?>
