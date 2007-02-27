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
	$pageKeywords	= "MDE, Reverse-Engineering, Model Discovery, Use Case, Discoverer, Metamodel";
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
					    		<h2> <a href="JavaLegacyRE">SharenGo Java Legacy Reverse-Engineering</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case, which covers both the "Model Discovery" and "Model Understanding" phases, is about reverse engineering a Java application. It uses the <a href="../toolBox/JavaAbstractSyntax">Java Abstract Syntax discovery tool</a> (from the MoDisco Tool Box) to discoverer the abstract syntax tree (AST) of each Java compilation unit (i.e. each source file). The generated models are then analyzed by model transformations in order to produce a <a href="http://www.sharengo.org/">SharenGo</a> business model.
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
					    		<h2> <a href="BugzillaMetrics">Bugzilla Metrics</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This complete use case covers both the "Model Discovery" and "Model Understanding" phases. It is about discovering bugs information expressed in HTML format, building a Bugzilla model from these data, computing it in order to produce a Metrics model and finally building some visualizations of the generated metrics. 
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
								This complete use case covers a complex "Model Discovery" phase. It is about discovering the information on the content of the "Classic Models" <a href="http://www.eclipse.org/birt/phoenix/db/">BIRT sample database</a>, by using the database content discovery facility of the <a href="../toolBox/RelationalDBInformation/">generic "Relational Database Information" discovery tool</a> (MoDisco tool box), and then generating a specific ClassicModels model. 
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
					    		<h2> <a href="UnixFileSystem">Unix File System</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This use case is about discovering the file tree of a Unix system and building a model representing it. The model produced conforms to a very simple Unix file system metamodel.
							</td>
							<td width="10%" align="center">		
								<img src="../../resources/images/implementation.png"  />
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
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/usecases/">Eclipse/M2M ATL Use Cases</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.eclipse.org/gmt/amw/usecases/">Eclipse/GMT AMW Use Cases</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
