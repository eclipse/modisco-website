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
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

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
    <br />
	<a target="_blank" href="http://wiki.eclipse.org/MoDisco#Description">more about MoDisco &raquo;</a> 
	<br /><br />
	</p>
		
	<hr/>
		
		<div class="homeitem"> <!-- homeitem3col -->
			$modisconews
		</div>
		<hr class="clearer" />
	</div>

<!-- Right Part -->
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Incubation</h6>
   		<p>Some components are currently in their <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p> 
	   	<div align="center">
   			<a href="http://www.eclipse.org/projects/what-is-incubation.php">
   				<img align="right" src="../resources/images/egg-incubation.png" border="0" alt="Incubation" />
   			</a>
   		</div>
	</div>
		
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="doc/MoDisco_Flyer-Poster_1.0.pdf">Flyer-poster</a></li>
				<li><a href="doc/MoDisco_Overview_1.0.pdf">Overview (slides)</a></li>
				<li><a href="about.php">Description</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/MoDisco">Wiki</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Components</h6>
			<ul>
				<li><a href="useCases/">Use Cases</a></li>
				<li><a href="technologies/">Technologies</a></li>
				<li><a href="infrastructure/">Infrastructure</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Utilities</h6>
			<ul>
				<li><a href="http://www.eclipse.org/modeling/emf/">EMF (Model Handling)</a></li>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model Transformation)</a></li>
				<li><a href="http://www.eclipse.org/gmt/amw/">AMW (Model Weaving)</a></li>
				<li><a href="http://www.eclipse.org/gmt/am3/">AM3 (Megamodeling)</a></li>
			</ul>
		</div>
		
		<br>
		
	</div>

EOHTML;


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
