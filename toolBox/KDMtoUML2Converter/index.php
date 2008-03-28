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
	$pageTitle 		= "MoDisco Tool - KDM-to-UML2 Converter";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, ADM, KDM, UML2";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - KDM-to-UML2 Converter</h1>

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
	    	OMG, ADM (Architecture-Driven Modernization), KDM (Knowledge Discovery Metamodel), UML2 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This tool is about <b>converting KDM models into UML2 models</b> in order to allow integrating KDM-compliant tools (i.e. discoverers) with UML2-compliant tools (e.g. modelers, model transformation tools, code generators, etc).
	    	<br /><br />
	    	This tool is provided by <b><a href="http://www.mia-software.com/">MIA-Software</a></b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach applied by this tool is summarized in the following figure: 
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_KDMtoUML2Converter_Overview.png"/>
	  		<br /><br />
	  		<b>Using the KDM-to-UML2 Converter for integrating KDM tools with UML2 tools</b>
		</p>
		<p align="justify">
			The converter is implemented by an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a> taking as input a model conforming to the <i>KDM</i> metamodel and producing as ouptut a model conforming to the <i>UML2</i> metamodel. Thus, each <i>KDM</i> input model elements are converted into their corresponding <i>UML2</i> output model elements. 
			<br/><br/>
			We provide below an example showing a <i>KDM</i> sample model and the equivalent generated <i>UML2</i> model. 
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/KDMtoUML2Converter_ModelExcerpt.jpg" style="border:1px solid black;"/>
	  		<br /><br />
			<b>KDM-to-UML2 Conversion Example</b>
		</p>
		<p align="justify">
			Here are the limitations of the current version of the KDM-to-UML2 converter:
			<ul>
				<li>The bidirectional <i>UML Association</i> elements are not indentified by the rules: two complementary unidirectional <i>UML Association</i> elements are instead generated.</li>
				<li>A not-existing (or not-specified) type in a <i>KDM MemberUnit</i> element triggers a converting error</li>
			</ul> 
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
			</COLGROUP>
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<a href="downloads/KDMtoUML2Converter_Description.pdf">
			<img src="../../resources/buttons/Description_button.jpg"/>
		</a>
		</td>
		<td>
			<b>Tool Description</b>: General description of the converter, the used metamodels, the implemented transformation rules, description of what remains to be done, etc.
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</td>
		<td>
			<b>Tool Installation & User Guide</b>: How to install and use the tool for converting <i>KDM</i> models into <i>UML2</i> models.
			<br><b>See the README.TXT file in the root of the converter's ATL project, cf. "Download" section</b>
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
			The two used metamodels are both expressed in two different formats: the <b>Ecore</b> one and the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual one.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/KDMtoUML2Converter_MoDisco-Tool_v1-0.zip">
			<img src="../../resources/buttons/Tool_button.jpg"/>
		</a>
		</td>
		<td>
			Complete version of the <b>KDM-to-UML2 Converter</b> ATL project (with all the required resources including sample <i>KDM</i> models and corresponding <i>UML2</i> models).
			All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/toolbox/KDMtoUML2Converter_MoDisco-Toolbox/">MoDisco CVS</a>
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
				<li>March 2008</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://hdubourg@sodifrance.fr">Hubert Dubourg (Mia-Software)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.omg.org/spec/KDM/1.0/">OMG KDM Specification</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.omg.org/spec/UML/2.1.2/">OMG UML 2.1 Specification</a></li>
			</ul>
		</div>
	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>