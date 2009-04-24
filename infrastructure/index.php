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
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Infrastructure";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Infrastructure</h1>

		<a name="goals"></a>
		<img align="right" src="../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	MoDisco provides a set of <b>generic tools</b> which may be part of a <b>metamodel-driven reverse-engineering (MDRE)</b> framework or may be used in various MDRE processes (for instance in <a href="../useCases">MoDisco use cases</a>).  Most of these components are elaborated tools that allow performing different kinds of complex operation on models.
    	</p>
    	<p align="justify">
	    	A least a general description and first implementation is available for most of the presented tools, as well as some more precise documentations for many of them.
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
					    		<h2> <a href="GenericModelEditor">Generic Model Editor</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This generic tool is about providing a parametrizable feature-rich Ecore model editor which can be used to browse and edit any Ecore model more easily than with the default sample Ecore editor.
								This is particularly useful when dealing with models discovered from large legacy systems. 
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
					    		<h2> <a href="KDM">Knowledge Discovery Metamodel Implementation</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This provides an EMF implementation of the <a href="http://www.omg.org/technology/kdm/index.htm">Knowledge Discovery Metamodel (KDM) </a>specification which defines a metamodel for representing information related to existing software assets
            					and their operational environments. It can be intensively used for representing models discovered from large legacy systems.  
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
					    		<h2> <a href="J2SE5">Java 2 Standard Edition 5 Metamodel Implementation</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This provides an EMF implementation of the <a href="http://java.sun.com/j2se/1.5.0/">Java 2 Standard Edition 5 Metamodel (J2SE5)</a> specification which defines a metamodel for representing models of Java programs 
								developed using the Java Platform Standard Edition (Java SE), which is the premier platform for rapidly developing and deploying secure, portable applications that run on server and desktop systems spanning most operating systems.
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
					    		<h2> <a href="KDMtoUML2Converter">KDM-to-UML2 Converter</a> </h2>
		  					</td>
							<td width="70%" align="justify">
								This tool is about <b>converting KDM models into UML2 models</b> in order to allow integrating KDM-compliant tools (i.e. discoverers) with UML2-compliant tools (e.g. modelers, model transformation tools, code generators, etc). The converter is implemented by an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a> taking as input a model conforming to the <i>KDM</i> metamodel and producing as output a model conforming to the <i>UML2</i> metamodel.
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
