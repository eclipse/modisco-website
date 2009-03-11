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
	$pageTitle 		= "MoDisco Tool - Metrics Visualization Builder";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Metrics, SVG, Excel, HTML, Metamodels";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Metrics Visualization Builder</h1>

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

		<div>
		<table>
			<COLGROUP>
				<COL width="2%"/>
				<COL width="98%"/>
			</COLGROUP>
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>
		
		<p align="justify">
	    	Metrics, Visualizations, HTML, Excel, SVG 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This generic tool is about <b>building metrics visualizations</b> in different formats (<b>HTML</b> and <b>Excel</b> for tabular representations, <b>SVG</b> for graphical ones like bar charts and pie charts) <b>from any metrics data</b> stored into models that conform to the provided generic <i>Metrics</i> metamodel.
	    	<br /><br />
	    	This tool is provided by <b>INRIA AtlanMod</b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach applied by this tool is summarized in the following figure: 
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_MetricsVisualizationBuilder_Overview.png"/>
	  		<br /><br />
	  		<b>"Metrics Visualization Builder" Tool Overview</b>
		</p>
		<p align="justify">
			The tool is composed of a set of <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformations</a> that implement the different steps of the visualization building. The input <i>Metrics</i> model is first transformed into a <i>Table</i> model that provides a simple tabular representation of the data. Different visualization's formats specific models (i.e. <i>HTML</i>, <i>Excel</i> and <i>SVG</i> models) are then built from the <i>Table</i> model. These generated models are finally extracted into software readable files.
			<br/><br/>
			We provide below some examples of the visualizations that can be produced using the tool from a given <i>Metrics</i> model.
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/MetricsVisualizationBuilder_VisualizationExamples.png"/>
	  		<br /><br />
			<b>Examples of different visualizations (representing some metrics on <i>Bugzilla</i> data)</b>
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
				<tr>
					<td ALIGN=center><h4>Choose a use case</h4></td>
		
					<td align="center">
						<h2> <a href="../../useCases/BugzillaMetrics">Bugzilla Metrics</a> </h2>
					</td>
		
					<td>
	    				This complete use case covers both the "Model Discovery" and "Model Understanding" phases. It is about discovering bugs information expressed in HTML format, building a Bugzilla model from these data, computing it in order to produce a Metrics model and finally building some visualizations of the generated metrics.
    				</td>
    	
    			</tr>
    			<tr></tr>
    		</table>
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
			</COLGROUP>
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<!--<a href="downloads/MetricsVisualizationBuilder_Description.pdf">-->
			<img src="../../resources/buttons/Description_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>Tool Description</b>: General description of the tool, its architecture, its possible uses, the provided metamodels, etc.
			<br>Not yet available
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="downloads/MetricsVisualizationBuilder_InstallationUserGuide.pdf">-->
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>Tool Installation & User Guide</b>: How to install and use the tool for building metrics visualizations from already computed <i>Metrics</i> models.
			<br><b>See the README.TXT file in the root of the tool's ATL project, cf. "Download" section</b>
		</td>		
		</tr>
		
		</table>
		
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
			</COLGROUP>
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">

		<a href="metamodels.php">
			<img src="../../resources/buttons/Metamodels_button.jpg"/>		
		</a>
		
		</td>
		<td>
			All the provided metamodels are expressed in two different formats: the <b>Ecore</b> one and the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual one.
			Due to IP restrictions, the zoos of metamodels are not currently available anymore from <i>Eclipse.org</i>. However, the metamodels used within this use case are included into the plugin project you can download below.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/org.eclipse.gmt.modisco.tool.metricsvisualizationbuilder_v0.2.zip">
			<img src="../../resources/buttons/Tool_button.jpg"/>
		</a>
		</td>
		<td>
			Complete version of the <b>Metrics Visualization Builder</b> ATL project (with all the required resources including a sample Metrics model and the metamodels).
			All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.tool.metricsvisualizationbuilder/?root=Modeling_MODISCO">MoDisco SVN</a>
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
			<h6>General Information</h6>
			<ul>
				<li>April 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/bruneliere">Hugo Bruneliere (INRIA)</a> <br/>and <a href="mailto://eric.vepa@gmail.com">Eric Vepa</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.w3.org/Graphics/SVG/">W3C SVG (Scalable Vector Graphics) Specification</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.microsoft.com/office/xml/default.mspx">Microsoft Office 2003 XML Reference Schemas (including Excel SpreadsheetML)</a></li>
			</ul>
		</div>
	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>