<?php
$buildServerCommonFiles = array( 
	"/opt/public/cbi/modeling/includes/buildServer-common.php",
	$_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php",
);
$foundBuildServerCommonFile = false;
foreach ($buildServerCommonFiles as $bs)
{
	if (is_file($bs))
	{
		require_once($bs); $foundBuildServerCommonFile = true; break;
	}
}
if (!$foundBuildServerCommonFile)
{
	print "Warning: could not find modeling/includes/buildServer-common.php in _common.php";
}
else
{
	unset($foundBuildServerCommonFile);
}

$defaultProj = "";
unset($_GET["project"]); // modisco has no subprojects, so this should be blank
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); 
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 
$App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());

ob_start();

/* config */

/* zips that are allowed to be absent from the downloads page (eg., new ones added mid-stream) */
#$extraZips = array("pdt-SDK", "pdt-examples", "pdt-all-in-one-win32", "pdt-all-in-one-linux-gtk", "pdt-all-in-one-macosx-carbon","pdt-mylyn");
$extraZips = array();

/* $project => sections/Project Name => (prettyname => filename) */
/* only required if using something other than the default 4; otherwise will be generated */
$dls = array(
	"/" => array( # use "/" because PDT has no parent or child projects/components
		"MODISCO" => array(
			#"<img alt=\"All-In-One Bundle including Eclipse and required dependencies\" src=\"/modeling/images/dl-icon-aio-bundle.gif\"/> <b style=\"color:green\">All-In-One</b> Windows 32-bit" => "all-in-one-win32",
			#"<img alt=\"All-In-One Bundle including Eclipse and required dependencies\" src=\"/modeling/images/dl-icon-aio-bundle.gif\"/> <b style=\"color:green\">All-In-One</b> Linux x86/GTK 2" => "all-in-one-linux-gtk",
			#"<img alt=\"All-In-One Bundle including Eclipse and required dependencies\" src=\"/modeling/images/dl-icon-aio-bundle.gif\"/> <b style=\"color:green\">All-In-One</b> Mac OS X Carbon" => "all-in-one-macosx-carbon",
		 	"<acronym title=\"Click to download archived All-In-One p2 Repo Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
			"SDK (Runtime, Source)" => "SDK",
			"Runtime" => "runtime",
			"Sources" => "Sources",
			#"Mylyn Bridge" => "mylyn",
			#"Examples" => "examples",
			#"Automated Tests" => "Automated-Tests",
		),
	),
);

/* list of valid file prefixes for projects who have been renamed; keys have leading / to match $proj */
/* only required if using something other than the default; otherwise will be generated */
$filePre = array( # use "/" because MODISCO has no parent or child projects/components
	"/" => array("MODISCO", "modisco") // MODISCO-sdk-*.zip
);

/* define showNotes(), $oldrels, doLanguagePacks() in extras-$proj.php (or just extras.php for flat projects) if necessary, downloads-common.php will include them */
/* end config */

//if ($isBuildServer) { include_once $_SERVER["DOCUMENT_ROOT"] . "/pdt/build/sideitems-common.php"; }
//require_once($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/downloads-common.php");
require_once("downloads-common.php");

$html = ob_get_contents();
ob_end_clean();

/* Note: Google Analytics moved to _projectCommon.php so it's on EVERY page */

$trans = array_flip($projects);
$pageTitle = "MoDisco - Downloads";
$pageKeywords = "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, download";
$pageAuthor = "Nicolas Bros"; // (copied from PDT)

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/modeling/includes/downloads.css"/>' . "\n");
$App->AddExtraHtmlHeader('<script src="/modeling/includes/downloads.js" type="text/javascript"></script>' . "\n"); //ie doesn't understand self closing script tags, and won't even try to render the page if you use one
$App->AddExtraHtmlHeader('<link type="application/rss+xml" rel="alternate" title="PDT Build Feed" href="http://www.eclipse.org/downloads/download.php?file=/'.$PR.'/feeds/builds-'.$projct.'.xml"/>' . "\n");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
