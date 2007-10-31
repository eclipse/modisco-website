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
	$pageTitle 		= "MoDisco Use Case - Visual Basic Code Analysis";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Visual Basic";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Visual Basic Code Analysis</h1>

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
	    	Visual Basic 6 (VB6), TCS, UML, Measures (Metrics)  
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	   		This use case is about discovering Visual Basic (VB) models from VB source code, building UML models (i.e. in our case class diagrams) from these models and processing the VB models in order to produce some metrics (and their corresponding visualizations) on them.  
	   		<br /><br />
	    	The use case is developed and provided by the <b><a href="http://www.obeo.fr/">Obeo</a></b> company. 
	    	<br /><br />
	    	It is mainly composed of a Visual Basic discoverer (<i>Model Discovery</i> phase) and of two different analyzing tools (<i>Model Understanding</i> phase): each of them will be made with the AMMA Platform and its corresponding components.
	    	<br />
	    	<ul>
	    		<li>
	    			The <b>Visual Basic 6 discoverer</b> implementing the model-based reverse-engineering process from Visual Basic 6 source code is <a href="../../toolBox/VisualBasic">already available from the MoDisco tool box</a> section. 
				</li>
				<br/>
				<li>
					The <b>two analyzing tools</b> (not yet available) will provide advanced information from the VB models discovered by the reverse-engineering process. The initial idea is to apply model-to-model transformations on the discovered models in order to retrieve/compute the required information.
					<ul>
						<li>
							The <b>UML class diagram exhibitor</b> will be able to build UML models (in a readable format) from input VB models. 
						</li> 
						<li>
							The <b>measurement (metrics) provider</b> will produce, in the HTML format, different metrics computed from input VB models (such as the number of class, functions, subs, etc in the system).
						</li>
					</ul>
				</li>
	    	</ul>
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	None at the current time.
    	</p>
		<br/>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>
		
		<p align="justify">
	    	None at the current time.
    	</p>
		<br/>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>
		
		<p align="justify">
	    	None at the current time.
    	</p>
		<br/>

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
				<li>By the <a href="http://www.obeo.fr/">Obeo</a> company</li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
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