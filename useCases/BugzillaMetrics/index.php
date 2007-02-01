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
	$pageTitle 		= "MoDisco Use Case - Bugzilla Metrics";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Bugzilla Metrics</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#documentation"><b>Documentation</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>
    		    	
		<hr class="clearer" />

		<div id="container">
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>
		
		<p align="justify">
	    	Bug-Tracking, Defect-Tracking, Bugzilla, Metrics, XML, HTML, Microsoft Excel, SVG 
    	</p>
		
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This complete use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about discovering bugs information expressed in HTML format and building a Bugzilla model from these data (<b>Model Discovery</b>). Then, this generated model is computed in order to produce a Metrics model and to finally build different visualizations from these calculated metrics (<b>Model Understanding</b>).
	    	<br /><br />
	    	This use case is provided by <b><a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a></b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_BugzillaMetrics_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Bugzilla Metrics" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <b>Model Discovery</b> phase is implemented by applying the XML Discovery general methodology, i.e. the input file is injected into a <i>XML</i> model which is then transformed into a domain-specific model thanks to an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a>. The created model conforms to the <i>Bugzilla</i> metamodel.
	  		<br/><br/>
	  		The <b>Model Understanding</b> phase is also implemented by using <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformations</a>. A <i>Metrics</i> model, containing the data concerning the computed metrics, is first generated from the <i>Bugzilla</i> model. This <i>Metrics</i> model is then transformed into a <i>Table</i> model that provides a simple tabular representation of the data. After that, different visualization's formats specific models (i.e. <i>HTML</i>, <i>Excel</i> and <i>SVG</i> models) are built from the <i>Table</i> model. These generated models are finally extracted into software readable files.
	  		<br/><br/>
			All the metamodels mentioned in the previous schema (and so used within this use case) are available at the <a href="#download">Download section</a>.
	  	<br/><br/>
			We provide below a set of screenshots showing the different input/output files provided/created with this use case:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/BugzillaMetrics_Screenshots.png"/>
	  		<br /><br />
			<a name="BugzillaMetrics_Screenshots"><b>Screenshots of the input/outputs of the <i>Bugzilla Metrics</i> use case</b></a>
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
		<a href="downloads/BugzillaMetrics_UseCaseDescription.pdf">
			<img src="../resources/buttons/Description_button.jpg"/>
		</a>
		</td>
		<td>
			<b>"Bugzilla Metrics" Use Case - Description</b>: General description of the use case, its objectives, its architecture and overall process, the different metamodels and transformations used, etc.
			<br /> Available soon...
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/BugzillaMetrics_InstallationUserGuide.pdf">
			<img src="../resources/buttons/InstallationExecutionGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>"Bugzilla Metrics" Use Case - Installation & Execution Guide</b>: How to install and execute this use case for building metrics visualizations from Bugzilla data on bugs. 
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
		<a href="metamodels.php">
			<img src="../resources/buttons/Metamodels_button.jpg"/>
		</a>
		</td>
		<td>
			All the provided metamodels are expressed in the Ecore format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/BugzillaMetrics_MoDisco-UseCase_v1-0.zip">
			<img src="../resources/buttons/Prototype_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>Bugzilla Metrics</b> use case (with all the required resources including the used metamodels).
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
				<li><a href="http://www.bugzilla.org/">Bugzilla Defect-Tracking System</a></li>
				<li>----------</li>
				<li><a href="http://www.w3.org/Graphics/SVG/">W3C SVG (Scalable Vector Graphics) Specification</a></li>
				<li>----------</li>
				<li><a href="http://www.microsoft.com/office/xml/default.mspx">Microsoft Office 2003 XML Reference Schemas (including Excel SpreadsheetML)</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>