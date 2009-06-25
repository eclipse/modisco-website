<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# JavaDiscoverer.php
	#
	# Author: 		Gabriel Barbier
	# Date:			2009-04-03
	#
	# Description: presentation of Java discoverer plugin in MoDisco project.
    # It is a discoverer to represents Java applications as models (J2SE5 or KDM)
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - J2SE5 Discovery Tool";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, KDM, Java, J2SE5, j2se5, J2SE, JDK, Eclipse JDT";
	$pageAuthor		= "Gabriel Barbier";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Java 2 Standard Edition Discovery Tool</h1>

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
	    	Modernization, Model, Java, Reverse-engineering, Eclipse JDT, KDM
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
  
            This tool is about discovering a complete model out of the source code of a Java applications.
            The model, which conforms to the <a href="../../infrastructure/J2SE5">J2SE5 metamodel</a>,
            describes all the structural concepts (from packages up to method invocations and comments)
            and links between code elements (method invocations, variables usage, class inheritance, etc).
            <br>
            Initial models could be also translated in models conform to <a href="../../infrastructure/KDM">KDM</a>
            using <a href="http://www.eclipse.org/m2m/atl/">ATL</a> transformation.
            And these transformation could be customized to adapt existing mapping to your needs.
            <br>
            <br>
            This tool is provided by <a href="http://www.mia-software.com/">MIA-Software</a> and its development
            is being supported by the <a href="https://www.modelplex.org/">IST European MODELPLEX project</a>
            (MODELing solution for comPLEX software systems, FP6-IP 34081).
            <br>
            The overall approach is summarized in the following figure:
    	</p>
        <p align="center">
	  		<img src="../resources/schemas/MoDisco_J2SE5_NewOverview.jpg"/>
	  		<br /><br />
			<b>Tool overview</b>
		</p>

        <p align="justify">
            The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a>, named JavaDiscoverer,
            uses the Eclipse JDT to analyse an Eclipse Java project.
            The abstract syntax tree (AST) provided by the JDT is used to create the model elements describing
            the structure of the application. Then, a resolving process is used to link the elements between
            their usage and their definition.
            <br>
            This metamodel allows a navigation through the elements of the application.
            For example, by following the links between model elements (method invocation to method declaration),
            it is possible to discover the data and control flow of the application.
        </p>
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases and Tools</a></h4>

		<p align="justify">
             The aim of this discoverer is to support these families of use cases :

            <ul>
				<li>retro-modeling (transformation of the resulting model to UML or a DSL)</li>
                <li>quality analysis (computation of metrics on the resulting model)</li>
                <li>refactoring (transformation of the resulting model and re-generation to Java)</li>
            </ul>
            <br>
	    	<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
            <!--    
                <tr>
					<td align="center">
						<h2> <a href="../../useCases/Modelplex">Modelplex use case</a> </h2>
					</td>
					<td>
	    				The goal of this use case is to obtain a UML model of a java application.
                        It combines JavaDiscoverer with KdmToUmlConverter to attain this goal.
                        And it offers a way to customize easily these transformation chains.
    				</td>
    			</tr>
    		-->
                <tr>
					<td align="center">
						<h2> <a href="../../useCases/ModelFilter">Model filter use case</a> </h2>
					</td>
					<td>
	    				The goal of this use case is to obtain a specific UML model of a java element,
                        final model describes dependencies from selected element to other elements,
                        and it contains only required informations (it is a mimimalist model).
                        It combines JavaDiscoverer with KdmToUmlConverter to attain this goal.
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
		<a href="http://wiki.eclipse.org/MoDisco/JavaDiscoverer">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>J2SE5 Installation Guide</b>: How to install the discoverer for initialising J2SE5 and KDM models.
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
		<!--<a href="downloads/org.eclipse.gmt.modisco.j2se5.discoverer_0.6.0.jar">-->
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			First complete version of the <b>JavaDiscoverer</b> plug-in.
			<br/>All the sources 
			<!--contained in the archive--> 
			are available from
 the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.j2se5.discoverer/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>April 2009</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://gbarbier@mia-software.com">Gabriel Barbier (Mia-Software)</a>
				<!--<li style="list-style:none"><br/></li>-->
				and <a href="mailto://fgiquel@mia-software.com">Fabien Giquel (Mia-Software)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://java.sun.com/j2se/1.5.0/">J2SE5 specification</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.jdt.doc.isv/reference/apt/overview-summary.html">Eclipse JDT APIs</a></li>
			</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>