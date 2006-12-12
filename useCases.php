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
	$pageTitle 		= "MoDisco Use Cases";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Cases</h1>

		<a name="goals"></a>
		<img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco provides a set of <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">model discovery</a> use cases</b> covering different technical spaces and different domains of application. These use cases are concrete examples of how <b>metamodel-driven reverse-engineering (MDRE)</b> and corresponding <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverers</a></b> can be applied to build models from already existing real-life systems. Some of this use cases are simple ones, some others are more elaborated and reuse basic use cases or parts of other ones.
    	</p>
    	<p align="justify">
	    	A general description is given for each of these use cases, as well as some more precise documentations. For many of them, prototypes have already been implemented and are directly downloadable from this website.  
    	</p>
    	
		<hr class="clearer" />

	    <div class="homeitem3col">
			<h3>List of use cases</h3>
	    	<ul class="midlist">
				<li>
	    			<table width="100%">
						<tr>
							<td width="20%" valign="center">
					    		<a href="useCases/JavaAbstractSyntax/JavaAbstractSyntax.php"><img src="useCases/resources/buttons/JavaAbstractSyntax_button.jpg"/></a>
		  					</td>
							<td width="60%" align="justify">
								This use case is about discovering a full abstract syntax tree (AST) of the code (statements, expressions, annotations and Javadoc) taken from a Java compilation unit (typically a Class), and building a model representing it.
							</td>
							<td align="center">
								<a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="20%" valign="bottom">
					    		<a href="useCases/RelationalDBSchema/RelationalDBSchema.php"><img src="useCases/resources/buttons/RelationalDBSchema_button.jpg"/></a>
		  					</td>
							<td width="60%" align="justify">
								This use case is about discovering information on database schemas from real databases stored into a DBMS. The objective is to express the database's schemas as models that conform to a database's schema metamodel.
							</td>
							<td align="center">
								<a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="20%" valign="bottom">
					    		<a href="useCases/RelationalDBContent/RelationalDBContent.php"><img src="useCases/resources/buttons/RelationalDBContent_button.jpg"/></a>
		  					</td>
							<td width="60%" align="justify">
								This use case is about discovering information on database contents (i.e. tuples) from real databases stored into a DBMS. The objective is to express the database's contents as models that conform to a database's content metamodel.
							</td>
							<td align="center">
								<a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a>
							</td>
						</tr>
					</table>
	    		</li>
	    	</ul>
	    </div>
		<hr class="clearer" />
	</div>

	<div id="rightcolumn">

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
