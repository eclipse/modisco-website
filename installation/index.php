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
	$pageTitle 		= "MoDisco Installation";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverer";
	$pageAuthor		= "Nicolas Bros";
	
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
<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Installation</h1>
<h3>Using Eclipse Install Manager</h3>
<p align="JUSTIFY">
To install the different MoDisco plug-ins, just point your Install Manager to the following site:
<ul><li>Location: <a href="http://download.eclipse.org/modeling/mdt/modisco/updates/release/">http://download.eclipse.org/modeling/mdt/modisco/updates/release/</a></li></ul>

To get more details about the MoDisco update site, please visit the following page: <a href="http://www.eclipse.org/MoDisco/updates/">http://www.eclipse.org/MoDisco/updates/</a>.

<h3>Downloading</h3>
<ul><li>It is also possible to download a zipped version of the MoDisco tools from the <a href="http://www.eclipse.org/MoDisco/downloads/">downloads page</a>.</li></ul>

<h3>Required Configuration</h3>

In order to download MoDisco, the following projects must already be installed inside your Eclipse:
<ul>
<li>Java 5 (or higher) version of Java virtual machine</li>
<li><a href="http://www.eclipse.org/galileo/">Eclipse "Galileo" 3.5</a></li>
<li><a href="http://www.eclipse.org/modeling/emf/downloads/?project=emf">EMF 2.5</a></li>
<li><a href="http://www.eclipse.org/modeling/mdt/downloads/?project=uml2">UML2 3.0</a></li>
<li><a href="http://www.eclipse.org/modeling/m2m/downloads/index.php?project=atl">ATL 3.0</a></li>
<li><a href="http://www.eclipse.org/modeling/emf/downloads/?project=compare">EMF Compare 1.0</a></li>
<li><a href="http://www.eclipse.org/modeling/m2t/downloads/?project=jet">JET 1.0</a></li>
</ul>
		

<?php

// Right Part
//include($_SERVER['DOCUMENT_ROOT'] . "/MoDisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();

# Generate the web page
//$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>