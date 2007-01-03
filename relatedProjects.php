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
	$pageTitle 		= "MoDisco Related Projects";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Related Projects</h1>

		<a name="goals"></a>
		<img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />

    	<p align="justify">
	    	Here is a list of other projects related to the reverse engineering field.
    	</p>
    	<p align="justify">
    		Do not hesitate to post messages on the MoDisco newsgroup (eclipse.modeling.gmt.modisco) if you want your project to be indexed on this page or if you want to add a link to the Eclipse/GMT MoDisco component on your own site! 
    	</p>
		<hr class="clearer" />

	    <div class="homeitem3col">
			<h3>List of related projects</h3>
	    	<ul class="midlist">
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://adm.omg.org/">ADM Task Force (OMG)</a>
		  					</td>
							<td align="justify">
								The mission of this OMG (Object Management Group) task force is to create specifications and promote industry consensus on modernization of existing applications. This task force works on several packages: the KDM (Knowledge Discovery Metamodel) and the GASTM (Generic Abstract Syntax Tree Metamodel) ones are focused on defining standard metamodels for performing reverse-engineering processes.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.altova.com/features_reverse_engineer.html">Altova UModel® 2006</a>
		  					</td>
							<td align="justify">
								A reverse engineering tool that imports Java or C# source code and generates UML diagrams to facilitate analysis, enhancement, or reuse.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.iste.uni-stuttgart.de/ps/bauhaus/index-english.html">Bauhaus Project (Software Architecture, Software Reengineering, and Program Understanding)</a>
		  					</td>
							<td align="justify">
								The goal of the project "Bauhaus", a research project at the universities of Stuttgart and Bremen, is the development of: means to describe a software architecture, methods and tools to analyze and recover the software architecture (derivation of different views on the architecture of legacy systems, identification of re-usable components and estimation of change impact).			
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.cc.gatech.edu/reverse/">Georgia Tech's Reverse Engineering Group</a>
		  					</td>
							<td align="justify">
								A group of academics and industrials (leaded by the Georgia Tech University, USA) focused on reverse engineering problems.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.uni-koblenz.de/sre/">Interest Group Software Reengineering (SRE)</a>
		  					</td>
							<td align="justify">
								The interest group Software Reengineering (SRE) focuses on all aspects of software re-engineering and maintenance. Topics include static and dynamic software analysis, re-architecting, software visualization and program restructuring. Current activities also deal with software migration and process-models for software migration. 
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.jmove.org/">jmove</a>
		  					</td>
							<td align="justify">
								This open-source project offers a framework and an extendable set of tools to ease the understanding and valuation of the design and architecture of complex software written in java. It provides dependency analysis, metrics, design rule checking and impact analysis.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://swerl.tudelft.nl/bin/view/MoDSE/WebHome">Model-Driven Software Evolution (MoDSE) project (JACQUARD software engineering program)</a>
		  					</td>
							<td align="justify">
								 The goal of this project (which is part of the informatics research programme JACQUARD) is to develop a systematic approach to model-driven software evolution. This approach includes methods, techniques, and underlying tool support (i.e. a prototype programming environment that assists software engineers with the introduction, development, and maintenance of models and domain-specific languages).
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.openrce.org/about/">OpenRCE (The Open Reverse Code Engineering community)</a>
		  					</td>
							<td align="justify">
								OpenRCE fosters a shared learning environment among researchers interested in the field of reverse engineering. It aims to serve as a centralized resource for reverse engineers by hosting files, blogs, forums articles and more. 
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.ai.univ-paris8.fr/UPU/UPU.html">Program Understanding Research Group</a>
		  					</td>
							<td align="justify">
								It is well known that Program Understanding is a key activity of Reverse Engineering. In fact, anyone involved in RE is able to understand a program, at one level or another, in one form or another. The goal of this group is to promote research that could help enhance our understanding of program understanding, thus allowing the implementation of more powerful program underatanding tools. 
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.iste.uni-stuttgart.de/ps/reengineering/index.html">Reengineering Bibliography</a>
		  					</td>
							<td align="justify">
								This annotated bibliography provides information on software reengineering. It is an initiative of several people from the universities of Stuttgart (Germany) and Georgia Tech (USA).
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://reengineer.org/">Reengineering Forum</a>
		  					</td>
							<td align="justify">
								The Reengineering Forum is an industry association to encourage combined industry/research review of the state of the art and the state of the practice in reengineering of software, systems, and business processes. It is a meeting place for key people in the reengineering and reverse engineering fields: developers, researchers, and leading-edge users.	
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.reteam.org/">Reverse Engineering Team</a>
		  					</td>
							<td align="justify">
								A team of independent developers whose aim is to produce and provide useful tools and information about reverse engineering.	
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.program-transformation.org/Transform/ReverseEngineering">Reverse Engineering Wiki</a>
		  					</td>
							<td align="justify">
								A specific wiki (part of The Program Transformation Wiki) dedicated to reverse engineering.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.rigi.csc.uvic.ca/index.html">RIGI</a>
		  					</td>
							<td align="justify">
								Rigi is an interactive, visual tool designed to help you better understand and re-document your software. It has been in development over the past decade by researchers in the Department of Computer Science at the University of Victoria. Its two main goals are: to provide an infrastructure for research and practice in program understanding, to discover abstractions in large software systems and pass this information on to software engineers for maintenance and reengineering purposes. 
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://planetmde.org/rimel/">RIMEL (Reverse Engineering, Maintenance and Software Evolution)</a>
		  					</td>
							<td align="justify">
								RIMEL is a french-speaking group. It gathers teams interested in Reverse Engineering, Maintenance and Software Evolution. It is an open group which is currently hosting teams from France but also Switzerland, Belgium and Canada.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.semdesigns.com/">Semantic Designs (Automated Large-Scale Software System Analysis, Modification, Translation and Generation)</a>
		  					</td>
							<td align="justify">
								Semantic Designs provides extremely generalized compiler technology and services that can be used, for arbitrary mixes of computer languages, to implement software enhancement and reengineering tools, software quality assessment and improvement tools, etc.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.iam.unibe.ch/%7Escg/index.html">Software Composition Group (SCG)</a>
		  					</td>
							<td align="justify">
								The Software Composition Group carries out research in programming language design and software reengineering with the goal of facilitating the development of flexible, open software systems. The SCG is led by Prof. Oscar Nierstrasz and is part of the Institute of Computer Science and Applied Mathematics (IAM) at the University of Berne.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://w3.umh.ac.be/evol/index.html">The ERCIM Working Group on Software Evolution</a>
		  					</td>
							<td align="justify">
								The goal of this group is to identify a set of formally-founded techniques and associated tools (including re-engineering and reverse engineering ones) to support software developers with the common problems they encounter when evolving large and complex software systems.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.reverse-engineering.net/index.php">The Reverse Engineering Community</a>
		  					</td>
							<td align="justify">
								A forum dedicated to software protection, reverse engineering and reverse code engineering.
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="30%" valign="bottom">
					    		<a href="http://www.softwarerevolution.com">The Software Revolution, Inc.</a>
		  					</td>
							<td align="justify">
								TSRI provides automated legacy computer system modernization services to both government and industry. The provided services are derived from an advanced artificial intelligence-based software re-engineering toolset called JANUS.
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
