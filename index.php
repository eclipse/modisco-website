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
	$pageTitle 		= "MoDisco Home page";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverer";
	$pageAuthor		= "Freddy Allilaire, Hugo Bruneliere";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	$modisconews = get_modisconews(7);
		
ob_start();
?>

	<!-- Middle part -->
	<div id="midcolumn">
	<img style="float:right" src="resources/logoMoDiscoSmall.jpg" alt="MoDisco Logo"/>
	<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Home page</h1>
	<h3>Welcome</h3>
	<p align="JUSTIFY">
Legacy systems embrace a large number of technologies, making the development of tools to cope with legacy 
systems evolution a tedious and time consuming task.

As modernization projects face with both technologies combination and various modernization situations,
 model-driven approaches and tools offer the requisite abstraction level to build up mature and flexible
 modernization solutions. 

 	<h2>What is MoDisco ? </h2>

MoDisco provides an extensible framework to develop model-driven tools to support use-cases of existing software modernization :
<ul>
	<li>
    Quality Assurance: verifying whether an existing system meets the required qualities (detection of anti-patterns in existing code and computation of metrics.)
    </li>
    <li>
    Documentation: extraction of information from an existing system to help understanding one aspect of this system (structure, behaviour, persistence, data-flow, change impact , etc).
    </li>
    <li>
    Improvement: transformation of an existing system to integrate better coding norms or design patterns.
    </li>
    <li>
    Migration: transformation of an existing system to change a component, the framework, the language, or its architecture
    </li>
</ul>
<br />
<img align="center" src="resources/Modisco-Overview.PNG" alt="MoDisco Overview"/>
In each case, modernizing an existing software system implies:
<ul>
	<li>
	Describing the information extracted out of the artifacts of this system
    </li>
    <li>
    Understanding the extracted information in order to take the good modernization decisions
    </li>
    <li>
    Transforming this information to new artifacts facilitating the modernization (metrics, document, transformed code, ...) 
    </li>
</ul>
    
MoDisco aims at supporting these three phases by providing :
<ul>
	<li>
	Metamodels to describe existing systems
    </li>
    <li>
    Discoverers to automaticaly create models of these systems
    </li>
    <li>
    Generic tools to understand and transform complex models created out of existing systems
    </li>
    <li>
    Use-cases illustrating how MoDisco can support modernization process 
    </li>
</ul>
    
    <table width="100%">
    	<tr>
    		<td width="80%" align="center" valign="middle"> 
    			The MoDisco project has been initiated and originally developed in the context of the <a href="http://www.modelplex.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
    		</td>
    		<td> 
    			<a href="http://www.modelplex.org"> <img align="right" src="./resources/modelplexLogo.JPG"/> </a>
    		</td>
    	</tr>
    <table>
    
    <br /><br />
    
	<a target="_blank" href="http://wiki.eclipse.org/MoDisco#Description">more about MoDisco &raquo;</a> 
	<br /><br />
	</p>
		
	<hr/>
		
		<div class="homeitem"> <!-- homeitem3col -->
<?= $modisconews?>			
		</div>
		<hr class="clearer" />
	</div>

<!-- Right Part -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/gmt/modisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
