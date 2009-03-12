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
	$pageTitle 		= "MoDisco Tool - Visual Basic 6 Discovery Tool";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Visual Basic 6";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Visual Basic 6 Discovery Tool</h1>

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
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>
		
		<p align="justify">
	    	Visual Basic 6 (VB6), Visual Basic source code 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This generic tool is about <b>discovering the structural part of the Visual Basic source code</b>. It identifies and stores into a model (which conforms to the provided Visual Basic metamodel) the headers, constants, variables, functions and subs contained in a Visual Basic 6 source file.
	    	<br /><br />
	    	This tool is developed and provided by the <b><a href="http://www.obeo.fr/">Obeo</a></b> company. 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>    	
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_VisualBasic_Overview.png"/>
	  		<br /><br />
			<b>"Visual Basic 6" Tool Overview</b>
		</p>
		<p align="justify">
			The current version of the discoverer is composed of:
	    	<ul>
	    		<li>a metamodel describing the Visual Basic language conceptual elements and their interdependencies</li>
	    		<li>a corresponding grammar (generated using <a href="http://www.eclipse.org/gmt/tcs/">TCS</a>) whose elements recognition leads to the creation of the model elements</li>
	    		<li>a Java archive (".jar" file generated from this grammar) which is used as an accessor to the data</li>
	    	</ul>
	    	<br/>
	    	The following schema provides an example of a Visual Basic reverse-engineering process:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/VBDiscoveryProcess_Overview.png"/>
	  		<br /><br />
			<b>Visual Basic 6 Discovery Process Example</b>
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
						<h2> <a href="../../useCases/VBCodeAnalysis">Visual Basic <br/>Code Analysis</a> </h2>
					</td>
					<td>
	    				This complete use case, which covers both the "Model Discovery" and "Model Understanding" phases, is about discovering Visual Basic (VB) models from VB source code, building UML models (i.e. in our case class diagrams) from these models and processing the VB models in order to produce some metrics (and their corresponding visualizations) on them.
    				</td>
    			</tr>
    			<tr></tr>
    		</table>
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<p align="justify">
	    	None at the current time.
    	</p>
		<br/>	
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>
<!--
		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Visual%20Basic">
			<img src="../../resources/buttons/Metamodel_button.jpg"/>		
		</a>

		</td>
		<td>
			<b>Visual Basic metamodel</b> expressed in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Visual%20Basic">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
			Due to IP restrictions, the zoos of metamodels are not currently available anymore from <i>Eclipse.org</i>.	
		</td>		
		</tr>
		
		<tr>
		<td></td>
-->
		<td align="center">
<!--
		<a href="downloads/VisualBasicDiscoveryTool_MoDisco-Tool_v1-0.zip">
-->
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
<!--		
		</a>
-->
		</td>
		<td>
<!--
			First complete version of the <b>Visual Basic Discovery Tool</b> plug-in (with all the required resources including the metamodel).
			All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/toolbox/fr.obeo.modisco.vb.parser/">MoDisco CVS</a>
-->
			Due to IP restrictions, the prototype is not currently available from <i>Eclipse.org</i>.
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
				<li>October 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By the <a href="http://www.obeo.fr/">Obeo</a> company</li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://msdn2.microsoft.com/en-us/vbrun/default.aspx">Microsoft Visual Basic 6 Resource Center</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>