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
	$pageTitle 		= "MoDisco Use Case - Sharengo Java Legacy Reverse-Engineering: Metamodels";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Java, Legacy Modernization, Metamodels";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Sharengo Java Legacy Reverse-Engineering: Metamodels</h1>

		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
    	<p>
    	We provide here the links to all the metamodels which have been developped and/or used within this use case. 
    	<br /><br />
    	These metamodels are available resources that may be used within other use cases or tools, in other different contexts or for other purposes.
    	<br /><br />
    	Each of them is provided in different formats, namely Ecore and <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a>.
    	</p>
    		    	
		<hr class="clearer" />

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
			</COLGROUP>
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Metamodels</h4>
		
		<table border="1" frame="lhs" width="80%">
			<COLGROUP>
				<COL width="25%">
				<COL width="25%">
			</COLGROUP>
		<tr>
		<td align="center">
		<b><font size="3"><i>Ecore</i> format</font></b>
		</td>
		<td align="center">
		<b><font size="3"><i>KM3</i> format</font></b>
		</td>
		</tr>
		
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#JavaAbstractSyntax">
		Java Abstract Syntax
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#JavaAbstractSyntax">
		Java Abstract Syntax
		</a>	
		</tr>
		
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Sharengo">
		Sharengo
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Sharengo">
		Sharengo
		</a>	
		</tr>

		
		</table>
		
		</table>
		</div>
	    
		<hr class="clearer" />
		<br />
		Note that these two metamodels are also available in other varied graphical and textual formats from the <a href="http://www.eclipse.org/gmt/am3/zoos/">Eclipse/GMT AM3 component zoos</a>.
		<br /><br />
		<a href="index.php">Back to the "Sharengo Java Legacy Reverse-Engineering" use case main page &raquo;</a>
		<br /><br /><br />
	</div>
	
	
	<!-- Right Part -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li>March 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://benois@argia-engineering.fr">Jerome Benois</a> <br/> and <a href="mailto://belmonte@argia-engineering.fr">Laurent Belmonte</a>  (<a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering</a>)</li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.sharengo.org/">The SharenGo Group</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering Company</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>