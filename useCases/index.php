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
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Use Cases";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Cases</h1>

		<a name="goals"></a>
		<img align="right" src="../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco provides a set of <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">model discovery</a> use cases</b> covering different technical spaces and different domains of application. These use cases are concrete examples of how <b>metamodel-driven reverse-engineering (MDRE)</b> and corresponding <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverers</a></b> can be applied to build models from already existing real-life systems, and also of how these generated models can then be used. Some of these use cases are simple ones, some others are more elaborated and reuse basic use cases or components of the <a href="../toolBox">MoDisco tool box</a>.
    	</p>
    	<p align="justify">
			Other Eclipse components have such a use case section like the <a href="http://www.eclipse.org/gmt/amw/usecases/">GMT AMW</a> one or 
			the <a href="http://www.eclipse.org/m2m/atl/usecases/">M2M ATL</a> one.
		</p>
    	<p align="justify">
	    	A general description is given for each of these use cases, as well as some more precise documentations for many of them. For some of them, prototypes have already been implemented and are directly downloadable from this website. 
    	</p>
    	<p align="justify">
			The progress status of each use case is indicated by the icons below:
			<table width="100%">
				<tr>
					<td align="center"><img src="../../resources/images/specification.png" /> <b>Specification</b></td>
		    		<td align="center"><img src="../../resources/images/implementation.png" /> <b>Partially Implemented</b></td>
		    		<td align="center"><img src="../../resources/images/completion.png" /> <b>Reaching Completion</b></td>
				</tr>
			</table>
		</p>
	    	
		<hr class="clearer" />

	    <div class="homeitem3col">
			<h3>List of use cases</h3>
	    	<ul class="midlist">
				<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="BugzillaMetrics">Bugzilla Metrics</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about discovering bugs information expressed in HTML format, building a Bugzilla model from these data, computing it in order to produce a Metrics model and finally building some visualizations of the generated metrics. In order to perform this last step, the <a href="../infrastructure/MetricsVisualizationBuilder/">Metrics Visualization Builder</a> tool (from the MoDisco infrastructure) is used. 
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/completion.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="BIRTSampleDB">Eclipse/BIRT Project <br/>Sample Database</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case covers a complex <i>Model Discovery</i> phase. It is about discovering the information on the content of the "Classic Models" <a href="http://www.eclipse.org/birt/phoenix/db/">BIRT sample database</a>, by using the database content discovery facility of the generic "Relational Database Information" discovery tool (currently not available), and then generating a specific ClassicModels model. 
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/completion.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="JavaPlatformOntologies">Generating Java Platform Ontologies </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about reverse engineering the Java API from the class library JAR files using the <a href="http://ssel.vub.ac.be/ssel/research:mdd:jar2uml">Jar2UML discovery tool</a> (part of the MoDisco tool box), generating OWL ontologies from the created UML models using <a href="http://www.eclipse.org/m2m/atl/">ATL model transformations</a>, and finally bundling these ontologies with the <a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">PlatformKit</a> Eclipse plugin.
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/completion.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="PerformanceAnnotatedUmlStateCharts">Performance-Annotated UML2 State Charts</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about discovering performance information from an Excel file and building a Trace model from these data. Then, this generated model is computed in order to produce a Metrics model whose data are finally used to automatically apply a "Performance" profile to a UML2 state chart. 
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/implementation.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="JavaLegacyRE">SharenGo Java Legacy Reverse-Engineering</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case, which covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases, is about reverse engineering a Java application. It uses the <a href="../technologies/JavaAbstractSyntax">Java Abstract Syntax discovery tool</a> (from the MoDisco technologies) to discoverer the abstract syntax tree (AST) of each Java compilation unit (i.e. each source file). The generated models are then analyzed by model transformations in order to produce a <a href="http://www.sharengo.org/">SharenGo</a> business model.
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/specification.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="VBCodeAnalysis">Visual Basic Code Analysis</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about discovering Visual Basic (VB) models from VB source code, building UML models (i.e. in our case class diagrams) from these models and processing the VB models in order to produce some metrics (and their corresponding visualizations) on them.  
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/specification.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    	</ul>
	    </div>
		<hr class="clearer" />
	</div>

	<!-- Right Part -->
	<div id="rightcolumn">
		
		<div class="sideitem">
			<h6>Incubation</h6>
   				<div align="center"><a href="http://www.eclipse.org/projects/what-is-incubation.php"><img 
        			 align="center" src="../../resources/images/egg-incubation.png" 
        			 border="0" alt="Incubation" /></a></div>
		</div>
		
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="doc/MoDisco_Flyer-Poster_1.0.pdf">Flyer-poster</a></li>
				<li><a href="doc/MoDisco_Overview_1.0.pdf">Overview (slides)</a></li>
				<li><a href="about.php">Description</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/MoDisco">Wiki</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Components</h6>
			<ul>
				<li><a href="useCases/">Use Cases</a></li>
				<li><a href="technologies/">Technologies</a></li>
				<li><a href="infrastructure/">Infrastructure</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Utilities</h6>
			<ul>
				<li><a href="http://www.eclipse.org/modeling/emf/">EMF (Model Handling)</a></li>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model Transformation)</a></li>
				<li><a href="http://www.eclipse.org/gmt/amw/">AMW (Model Weaving)</a></li>
				<li><a href="http://www.eclipse.org/gmt/am3/">AM3 (Megamodeling)</a></li>
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
