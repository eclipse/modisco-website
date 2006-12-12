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
	$pageTitle 		= "MoDisco Use Case - Java Abstract Syntax";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Java Abstract Syntax</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#documentation"><b>Documentation</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>
    		    	
		<hr class="clearer" />

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This use case is about discovering a full abstract syntax tree (AST) of the code (statements, expressions, annotations and Javadoc) taken from a Java compilation unit (typically a Class), and building a model representing it. The overall approach is shown in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_JavaAbstractSyntax_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Java Abstract Syntax" Use Case Overview</b>
		</p>
		<p align="justify">
			The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a>, named <b>JavaAbstractSyntaxDiscoverer</b>, is built upon the Eclipse JDT. It takes as input a Java compilation unit (DOT java file). It uses the JDT parser in order to have an in-memory representation of the compilation unit. Then, it uses a visitor processing each in-memory AST node and creates the corresponding model elements.
			<br/><br/>
			We defined a metamodel of the Java compilation unit's syntax by studying the Eclipse JDT API. This metamodel, named <b>JavaAbstractSyntax metamodel</b>, is available at the <a href="#download">Download section</a>.
			<br/><br/>
			We provide below a short excerpt, representing the simple <i>System.out.println("Done!");</i> Java statement, of a model (in XMI format) created by using this discoverer:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/JavaAbstractSyntax_ModelExcerpt.png"/>
	  		<br /><br />
			<b>Excerpt (representing the <i>System.out.println("Done!");</i> Java statement) of a model produced by the discoverer</b>
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	None at the current time.
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/JavaAbstractSyntax/downloads/???_Description.pdf">-->
			<img src="../resources/buttons/Description_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>JavaAbstractSyntaxDiscoverer Description</b>: General description of the discoverer, its architecture, its possible uses, the JavaAbstractSyntax metamodel, etc.
			<br>Available soon... 
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/JavaAbstractSyntax/downloads/???_InstallationUserGuide.pdf">-->
			<img src="../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>JavaAbstractSyntaxDiscoverer Installation & User Guide</b>: How to install and use the discoverer for building Java AST models from Java compilation units.
			<br>Available soon... 
		</td>		
		</tr>
		
		</table>
		
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#JavaAbstractSyntax">
			<img src="../resources/buttons/Metamodel_button.jpg"/>
		</a>
		</td>
		<td>
			<b>JavaAbstractSyntax metamodel</b> expressed in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#JavaAbstractSyntax">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/JavaAbstractSyntax/downloads/JavaAbstractSyntaxDiscoverer_v1-0.zip">-->
			<img src="../resources/buttons/Discoverer_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			First version available soon...
		</td>		
		</tr>
		
		</table>



		</td>
		</tr>
		</table>
		</div>
	    
		<hr class="clearer" />
	</div>
	
	
	<!-- Right Part -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://java.sun.com/">The Java Language</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.jdt.doc.isv/reference/apt/overview-summary.html">The Eclipse JDT Java API</a></li>
				<li>-------------------------------------</li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>