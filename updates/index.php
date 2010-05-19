<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "MoDisco Update Sites";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverer";
	$pageAuthor		= "Nicolas Bros, Grégoire Dupé";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	//include('../news/scripts/news.php');
	//$modisconews = get_modisconews(7);
		
ob_start();
?>

<!-- Middle part -->
<div id="midcolumn">
<img style="float:right" src="../resources/logoMoDiscoSmall.jpg" alt="MoDisco Logo"/>
<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Update Sites</h1>
<h3>How to add the MoDisco update site</h3>
<p align="JUSTIFY">

There are several different ways to add a new update site to the list of sites available from the Install Manager. 
In all cases, the site location (i.e. the Web URL or the archived Update Site provided above) is the only required item.
<p align="JUSTIFY">
To add the MoDisco site, one of the procedures described from the <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-129.htm">Install Manager documentation</a> must be followed.
</p>  
<p>
<h4>Main update site:</h4>
<ul>
<li><a href="http://download.eclipse.org/modeling/mdt/modisco/updates/release/">http://download.eclipse.org/modeling/mdt/modisco/updates/release/</a> <br><font color='#808080'>(Eclipse Galileo Update)</font></li>
</ul>

<h4>Development update sites:</h4>
<ul>
<li><a href="http://download.eclipse.org/modeling/mdt/modisco/updates/milestones/">http://download.eclipse.org/modeling/mdt/modisco/updates/milestones/</a> <br><font color='#808080'>(Eclipse Helios Update)</font></li>
<li><a href="http://download.eclipse.org/modeling/mdt/modisco/updates/integration/0.8.0">http://download.eclipse.org/modeling/mdt/modisco/updates/integration/0.8.0</a> <br><font color='#808080'>(Eclipse Helios Update)</font></li>
<li><a href="http://download.eclipse.org/modeling/mdt/modisco/updates/integration/0.9.0">http://download.eclipse.org/modeling/mdt/modisco/updates/integration/0.9.0</a> <br><font color='#808080'>(Eclipse Helios Update)</font></li>
<li><a href="http://download.eclipse.org/modeling/mdt/modisco/updates/nightly/">http://download.eclipse.org/modeling/mdt/modisco/updates/nightly/</a> <br><font color='#808080'>(Eclipse Helios Update)</font></li>
</ul>
</p>

<?php

// Right Part
//include($_SERVER['DOCUMENT_ROOT'] . "/MoDisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();

# Generate the web page
//$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>