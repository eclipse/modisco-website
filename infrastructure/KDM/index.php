<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# kdm.php
	#
	# Author: 		Gabriel Barbier
	# Date:			2005-12-05
	#
	# Description: presentation of KDM plugin in MoDisco project.
    #  It is an EMF implementation of OMG KDM specification adapted to Eclipse requirements.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - Knowledge Discovery Metamodel (KDM) Implementation";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, Java, Knowledge Discovery Metamodel (KDM), Knowledge Discovery Metamodel, KDM, OMG, Object Management Group, Object Management Group (OMG), action, audit, behavior, build, code, conceptual, data, event, KDM, model root, package, platform, runtime, source, structure, UI";
	$pageAuthor		= "Gabriel Barbier";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Knowledge Discovery Metamodel (KDM) Implementation</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases and Tools</b></a></li>
				<li><a href="#documentation"><b>Documentation</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>

		<hr class="clearer" />

		<div>
		<table border="0" width="100%">
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>

		<p align="justify">
	    	Modernization, Knowledge Discovery Metamodel (KDM), KDM, Object Management Group (OMG), OMG
    	</p>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
            This component offers an EMF implementation of <a href="http://www.omg.org/technology/kdm/index.htm">Knowledge Discovery Metamodel (KDM) </a>specification.
            <br />This specification defines a metamodel for representing information related to existing software assets
            and their operational environments (referred to as the <a href="http://www.omg.org/technology/kdm/index.htm">Knowledge Discovery Metamodel (KDM)</a>).
            This is the first in the series of specifications related to <a href="http://www.omg.org/adm/">Architecture-Driven Modernization (ADM)</a> activity.
            <br /><a href="http://www.omg.org/adm/">ADM</a> facilitates modernization projects by insuring interoperability for exchange of data between tools provided by different vendors.
            <br /><br />
	    	This development of this metamodel implementation is being supported by the <a href="http://www.modelplex.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
	    	<br /><br />
	    	<b>Architecture of the Knowledge Discovery Metamodel</b>
            <br/>
            KDM consists of 12 packages that are arranged into the following four layers:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_ADM_KDM_Overview.png"/>
	  		<br /><br />
			<b>"KDM" Architecture</b>
		</p>
		<p align="justify">
        <ol>
            <li>
                <b>Infrastructure Layer</b>
                </br>The KDM Infrastructure Layer consists of the 'Core', 'kdm', and 'Source' packages
 which provide a small common core for all other packages, the inventory model of the artifacts of the
 existing system and full traceability between the meta-model elements as links back to the source code
 of the artifacts, as well as the uniform extensibility mechanism.
 The Core package determines several of patterns that are reused by other KDM packages.
 Although KDM is a meta-model that uses <a href="http://www.omg.org/mof/">MOF</a>,
 there is an alignment between the KDM Core and Resource Description Framework (RDF).
                </br>
            </li>
            <li>
                <b>Program Elements Layer</b>
                </br>The Program Elements Layer consists of the Code and Action packages.
                <ul>
                    <li>The 'Code package' represents programming elements as determined
 by programming languages, for example data types, procedures, classes, methods, variables, etc.
 KDM Code package provides greater level of detail and is seamlessly integrated
 with the architecturally significant views of the software system.
                    </li>
                    <li>The 'Action package' captures the low level behavior
 elements of applications, including detailed control- and data flow between statements.
 Code and Action package in combination provide a high-fidelity intermediate representation
 of each component of the enterprise software system
                    </li>
                </ul>
            </li>
            <li>
                <b>Resource Layer</b>
                </br>The Resource Layer represents the operational environment of
 the existing software system. It is related to the area of Enterprise Application Integration (EAI).
                <ul>
                    <li>'Platform package' represents the operating environment of
 the software, related to the operating system, middleware, etc. including the
 control flows between components as they are determined by the runtime platform
                    </li>
                    <li>'UI package' represents the knowledge related to the user
 interfaces of the existing software system
                    </li>
                    <li>'Event package' represents the knowledge related to events
 and state-transition behavior of the existing software system
                    </li>
                    <li>'Data package' represents the artifacts related to persistent data,
 such as indexed files, relational databases, and other kinds of data storage.
 These assests are key to enterprise software as they represent the enterprise metadata.
 The KDM Data package is aligned with another OMG specification, called
 <a href="http://www.omg.org/technology/cwm/">Common Warehouse Metamodel (CWM)</a>
                    </li>
                </ul>
            </li>
            <li>
                <b>Abstractions Layer</b>
                </br>The Abstraction Layer represents domain and application abstractions.
                <ul>
                    <li>'Conceptual package' represent business domain knowledge and
business rules, insofar as this information can be mined from existing applications.
 These packages are aligned with another OMG specification,
 called <a href="http://www.omg.org/spec/SBVR/1.0/">Semantics of Business Vocabulary and Business Rules (SBVR)</a>
                    </li>
                    <li>'Structure package' describes the meta-model elements for representing
 the logical organization of the software system into subsystems, layers and components
                    </li>
                    <li>'Build package' represents the engineering view of the software system</li>
                </ul>
            </li>
        </ol>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases and Tools</a></h4>

		<p align="justify">
	    	<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
                <tr>
					<td align="center">
						<h2> <a href="http://wiki.eclipse.org/index.php/MoDisco/JavaDiscoverer">Java 2 Standard Edition v5.0 Discoverer</a> </h2>
					</td>
					<td>
	    				The goal of Java Discoverer tool is to allow practical extractions of J2SE5 models from a Java project. The J2SE5 models could also be converted in KDM models.
    				</td>
    			</tr>
    			<tr>
                    <td align="center">
						<h2> <a href="http://wiki.eclipse.org/index.php/MoDisco/CSharpDiscoverer">CSharp Discoverer</a> </h2>
					</td>
					<td>
                        The CSharp models could be converted in KDM models.
	    			</td>
                </tr>
                <tr>
                    <td align="center">
						<h2> <a href="http://wiki.eclipse.org/MoDisco/KDM/UMLConverter">KDM to UML converter</a> </h2>
					</td>
					<td>
	    				The goal of KDM to UML converter plugin is to allow practical transformations of KDM models to UML models.
    				</td>
                </tr>
    		</table>
    	</p>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		<td align="center">
		<a href="http://wiki.eclipse.org/MoDisco/KDM">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>KDM Installation Guide</b>: How to install the metamodel for building KDM models.
		</td>
		</tr>

		</table>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		
		<td align="center">
		<a href="downloads/org.eclipse.gmt.modisco.omg.kdm_0.6.0.jar">
			<img src="../../resources/buttons/Tool_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>KDM</b> plug-in.
			<br/>All the sources contained in the archive are also available from
 the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.omg.kdm/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>February 2009</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://nick@kdmanalytics.com">Nikolai Mansourov</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.omg.org/technology/kdm/index.htm">OMG KDM</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.omg.org/adm/">OMG ADM</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://en.wikipedia.org/wiki/Knowledge_Discovery_Metamodel">Wikipedia KDM</a></li>
			</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>