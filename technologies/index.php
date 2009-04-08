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
	$pageTitle 		= "MoDisco Toolbox";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverers, Technologies";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Technologies</h1>

		<a name="goals"></a>
		<img align="right" src="../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco provides a set of <b>technology-specific tools</b> which may be part of a <b>metamodel-driven reverse-engineering (MDRE)</b> framework or may be used in various MDRE processes (for instance in <a href="../useCases">MoDisco use cases</a>). Most of these tools are <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverers</a></b>, concerning different technical spaces, which allow injecting raw data into concrete models. 
    	</p>
    	<p align="justify">
	    	A least a general description and first implementation is available for most of the presented tools, as well as some more precise documentations for many of them.
    	</p>
	    	
	    <p align="justify">
			The progress status of each "Technology" tool is indicated by the icons below:
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
			<h3>List of tools</h3>
	    	<ul class="midlist">
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="J2SE5">Java 2 Standard Edition 5.0 Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>discovering a complete model out of the source code of a Java 5 application</b>. The model, which conforms to the <b>J2SE5</b> metamodel, describes all the structural concepts (from packages up to method invocations and comments) and links between code elements (method invocations, variables usage, class inheritance, etc). 
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
					    		<h2> <a href="JavaAbstractSyntax">Java Abstract Syntax Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>discovering a full abstract syntax tree (AST)</b> of the code (statements, expressions, annotations and Javadoc) taken from a <b>Java compilation unit</b> (typically a Class). It builds models, representing Java compilation units, which conform to a metamodel designed from the <a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.jdt.doc.isv/reference/apt/overview-summary.html">Eclipse JDT Java API</a>.
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
					    		<h2> <a href="KDMSourceDiscoverer">KDM Source <br/>Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about discovering a model out of an application files hierarchy, which conforms to the sub-package <i>Source</i> of <a href="../infrastructure/KDM">KDM metamodel</a>. The <i>Source</i> package defines a set of metamodel elements whose purpose is to represent the physical artifacts of the existing system, such as source files, images, configuration files, resource descriptions, etc.
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
					    		<h2> <a href="http://ssel.vub.ac.be/ssel/research:mdd:jar2uml">Jar2UML Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This discovery tool, written by <a href="http://ssel.vub.ac.be/ssel/about:members:denniswagelaar">Dennis Wagelaar</a> from the System and Software Engineering Lab (VUB), is about generating <b>UML models</b> from <b>Java APIs</b>. It takes a Jar file as input and generates a UML file (that contains a representation of the API) as output.
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
					    		<h2> <a href="VisualBasic">Visual Basic 6 <br/> Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>discovering the structural part of the Visual Basic source code</b>. It identifies and stores into a model (which conforms to the provided Visual Basic metamodel) the headers, constants, variables, functions and subs contained in a Visual Basic 6 source file. 
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
					    		<h2> <a href="RelationalDBInformation">Relational Database Information Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>discovering information from any concrete relational database</b> stored into a DBMS. It is composed of two distinct but complementary discoverers: the retrieved information concerns both <b>the schema</b> (i.e. the structure) and <b>the tuples</b> (i.e. the content) of a database. The objective of this tool is to <b>build models</b>, from this information, that conform to a database's schema metamodel or to a database's content metamodel.
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
					    		<h2> <a href="UnixFileSystem">Unix File System</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This use case is about discovering the file tree of a Unix system and building a model representing it. The model produced conforms to a very simple Unix file system metamodel.
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
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
