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
	$pageTitle 		= "MoDisco Tool - Java 2 Standard Edition 5.0 Discovery Tool";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Java, Eclipse JDT";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Java 2 Standard Edition 5.0 Discovery Tool</h1>

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
	    	Java, Eclipse JDT 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This generic tool is about <b>discovering a complete model out of the source code of a Java 5 application</b>. The model, which conforms to the <b>J2SE5</b> metamodel, describes all the structural concepts (from packages up to method invocations and comments) and links between code elements (method invocations, variables usage, class inheritance, etc).
	    	<br /><br />
	    	This tool is provided by <b><a href="http://www.mia-software.com/index.php?lang=en">MIA-Software</a></b> and its development is being supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>    	
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_J2SE5_Overview.png"/>
	  		<br /><br />
			<b>"Java 2 Standard Edition 5.0" Tool Overview</b>
		</p>
		<p align="justify">
			The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a>, named <b>J2SE5Discoverer</b>, uses the Eclipse JDT to analyse an Eclipse Java project. The abstract syntax tree (AST) provided by the JDT is used to create the model elements describing the structure of the application. Then, a resolving process is used to link the elements between their usage and their definition.
			<br/><br/>
			The model provided by this discoverer conforms to the <b>J2SE5 metamodel</b> which is available at the <a href="#download">Download section</a>.
			<br/><br/>
			This metamodel allows a navigation through the elements of the application. For example, by following the links between model elements (method invocation to method declaration), it is possible to discover the control flow of the application. 
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	The aim of this discoverer is to support these families of use cases :
        	<ul>
        		<li>retro-modeling (transformation of the resulting model to UML or a DSL)</li>
        		<li>quality analysis (computation of metrics on the resulting model)</li>
        		<li>refactoring (transformation of the resulting model and re-generation to Java)</li>
        	</ul> 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<p align="justify">
	    	Not yet available.
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#J2SE5">
			<img src="../../resources/buttons/Metamodel_button.jpg"/>
		</a>
		</td>
		<td>
			The <b>J2SE5 metamodel</b> is available in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#J2SE5">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="downloads/J2SE5DiscoveryTool_MoDisco-Tool_v1-0.zip">-->
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			Not yet available.
			<!--
			First complete version of the <b>Java 2 Standard Edition 5.0 Discovery Tool</b> plug-in (with all the required resources including the metamodel).
			All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/toolbox/org.eclipse.gmt.modisco.discoverer.j2se5/">MoDisco CVS</a>
			-->
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
				<li>By the <a href="http://www.mia-software.com/index.php?lang=en">MIA-Software</a> company</li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://java.sun.com/j2se/1.5.0/">Java Platform, Standard Edition (Java SE) 5.0</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.jdt.doc.isv/reference/apt/overview-summary.html">The Eclipse JDT Java API</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>