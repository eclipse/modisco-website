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
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverers, Tool Box";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Toolbox</h1>

		<a name="goals"></a>
		<img align="right" src="../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco provides a set of tools which may be part of a <b>metamodel-driven reverse-engineering (MDRE)</b> framework or may be used in such a MDRE process (for instance in <a href="../useCases">MoDisco use cases</a>). Some of these tools are simple <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverers</a></b>, concerning different technical spaces and different domains of application, that allow injecting raw data into models. Some others are more elaborated tools that allow performing different kinds of complex operation on models.
    	</p>
    	<p align="justify">
	    	A least a general description and first implementation are given for each of the provided tools, as well as some more precise documentations for many of them. For the more advanced tools which are independent projects or other Eclipse components, the link to the official website is provided.
    	</p>
	    	
	    <p align="justify">
			The progress status of each tool is indicated by the icons below:
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
					    		<h2> <a href="MetricsVisualizationBuilder">Metrics Visualization Builder</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>building metrics visualizations</b> in different formats (<b>HTML</b> and <b>Excel</b> for tabular representations, <b>SVG</b> for graphical ones like bar charts and pie charts) <b>from any metrics data</b> stored into models that conform to the provided generic <i>Metrics</i> metamodel. 
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
					    		<h2> <a href="http://www.eclipse.org/m2m/atl/">Eclipse/M2M ATL component</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								The <b>ATL (ATLAS Transformation Language)</b> M2M standard component provides a complete set of <b>model-to-model transformation (M2M)</b> tools. These include many sample ATL transformations, an ATL transformation engine, an Eclipse IDE for ATL (ADT: ATL Development Tools), general documentations, etc.
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
					    		<h2> <a href="http://www.eclipse.org/gmt/amw/">Eclipse/GMT AMW component</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								The <b>AMW (ATLAS Model Weaver)</b> GMT component provides a tool for establishing relationships (i.e., links) between models. The links are stored in a model, called <b>weaving model</b> which is created conforming to a weaving metamodel. A base <b>weaving metamodel</b> is provided: the metamodel may be extended to add other mapping semantics in order to allow creating variable mapping languages dedicated to specific application requirements.
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
								<img src="../../resources/images/completion.png"  />
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
								<img src="../../resources/images/implementation.png"  />
							</td>
						</tr>
					</table>
	    		</li>
	    		<li style="list-style:none">
	    			<table width="100%">
						<tr>
							<td width="20%" valign="middle">
					    		<h2> <a href="KDMtoUML2Converter">KDM-to-UML2 Converter</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This tool is about <b>converting KDM models into UML2 models</b> in order to allow integrating KDM-compliant tools (i.e. discoverers) with UML2-compliant tools (e.g. modelers, model transformation tools, code generators, etc). The converter is implemented by an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a> taking as input a model conforming to the <i>KDM</i> metamodel and producing as output a model conforming to the <i>UML2</i> metamodel.
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
					    		<h2> <a href="J2SE5">Java 2 Standard Edition 5.0 Discovery Tool</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about <b>discovering a complete model out of the source code of a Java 5 application</b>. The model, which conforms to the <b>J2SE5</b> metamodel, describes all the structural concepts (from packages up to method invocations and comments) and links between code elements (method invocations, variables usage, class inheritance, etc). 
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

	<div id="rightcolumn">

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
