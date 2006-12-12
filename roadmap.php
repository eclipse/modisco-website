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
	$pageTitle 		= "MoDisco Roadmap";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Roadmap</h1>

		<a name="goals"></a>
		<img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco is a collaborative project that will be successful if it receives various contributions from a large number of different partners. In order to clarify the interactions with the contributing partners, the following roadmap may be useful:
    	</p>
    	<p align="justify">
    		<ol>
    			<li> 
    				Creation and initialization of the project (general description, web site, newsgroup, etc).
    			</li>
    			<br>
    			<li> 
    				Elaboration of several use cases provided by different partners. A use case is usually composed of a specification and an implementation.
    			</li>
    			<br>
    			<li> 
    				Consolidification of the common toolbox and of the initial framework for building model discoverers. Improvement of the guidelines, methodological support and basic documentation.
    			</li>
    			<br>
    			<li> 
    				Improvement of the framework as additional use cases are built and contributed.
    			</li>
    		</ol>
    	</p>
		<p align="justify">
	    	The MoDisco web site will be regularly updated to correspond to the various steps in the roadmap. In particular, new use cases will be displayed.
    	</p>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
