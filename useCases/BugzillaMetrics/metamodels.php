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
	$pageTitle 		= "MoDisco Use Case - Bugzilla Metrics: Metamodels";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Bugzilla Metrics: Metamodels</h1>

		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
    	<p>
    	We provide here the links to all the metamodels which have been developped and/or used within this use case. 
    	<br /><br />
    	These metamodels are available resources that may be used within other use cases, in other different contexts or for other purposes.
    	<br /><br />
    	Each of them is provided in the Eclipse Ecore standard format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
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
				<COL width="50%">
				<COL width="50%">
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
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#XML">
		XML
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#XML">
		XML
		</a>	
		</td>		
		</tr>

		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Bugzilla">
		Bugzilla
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Bugzilla">
		Bugzilla
		</a>	
		</td>		
		</tr>
		
		</tr>
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Metrics">
		Metrics
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Metrics">
		Metrics
		</a>	
		</td>		
		</tr>
		
		</tr>
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Table">
		Table
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Table">
		Table
		</a>	
		</td>		
		</tr>
		
		</tr>
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#HTML">
		HTML
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#HTML">
		HTML
		</a>	
		</td>		
		</tr>
		
		</tr>
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#SpreadsheetMLSimplified">
		MS Office Excel SpreadsheetML
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#SpreadsheetMLSimplified">
		MS Office Excel SpreadsheetML
		</a>	
		</td>		
		</tr>
		
		</tr>
		<tr>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#SVG">
		SVG
		</a>
		</td>
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#SVG">
		SVG
		</a>	
		</td>		
		</tr>
		
		</table>
		
		</table>
		</div>
	    
		<hr class="clearer" />
		<br />
		Note that these metamodels are also available in other varied graphical and textual formats from the <a href="http://www.eclipse.org/gmt/am3/zoos/">Eclipse/GMT AM3 component zoos</a>.
		<br /><br />
		<a href="index.php">Back to the "Bugzilla Metrics" use case main page &raquo;</a>
		<br /><br /><br />
	</div>
	
	
	<!-- Right Part -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.bugzilla.org/">Bugzilla Defect-Tracking System</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.w3.org/Graphics/SVG/">W3C SVG (Scalable Vector Graphics) Specification</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.microsoft.com/office/xml/default.mspx">Microsoft Office 2003 XML Reference Schemas (including Excel SpreadsheetML)</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>