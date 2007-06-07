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
	$pageTitle 		= "MoDisco Use Case - SharenGo Java Legacy Reverse-Engineering";
	$pageKeywords	= "Java, Reverse-Engineering, Legacy modernization";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - SharenGo Java Legacy Reverse-Engineering</h1>

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
	    	Java, Reverse-Engineering, Legacy modernization
    	</p>
		
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This complete use case, which covers both the <b>Model Discovery</b> and <b>Model Understanding</b> phases, is about reverse engineering a Java application. It uses the <a href="../../toolBox/JavaAbstractSyntax">Java Abstract Syntax discovery tool</a> (from the <a href="../../toolBox">MoDisco tool box</a>) to discoverer the abstract syntax tree (AST) of each Java compilation unit (i.e. each source file). The generated models are then analyzed by model transformations in order to produce a <a href="http://www.sharengo.org/">SharenGo</a> business model.
	    	<br /><br />
	    	This use case has been developed and provided by <b><a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering Company</a></b>.
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_JavaLegacyRE_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"SharenGo Java Legacy Reverse-Engineering" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <b>model discovery</b> step uses the <a href="../../toolBox/JavaAbstractSyntax">Java Abstract Syntax discovery tool</a>. This tool produces models representing complete abstract syntax trees of Java source files. 
			<br /><br />
			The <b>model understanding</b> step is about finding business classes and services within the previously produced models. In order to find those classes, it is necessary to implement (in an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a>) some heuristics. For instance, a business class is a class having BusinessObjectBase as supertype, a business rule is a method throwing a BusinessException, etc.
			<br /><br />
			The two metamodels mentioned in the previous schema (and so used within this use case) are available at the <a href="#download">Download section</a>.	
	  	</p>
	  		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	None at the current time.
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<a href="downloads/JavaLegacyReverseEngineering_InstallationUserGuide.pdf">
			<img src="../../resources/buttons/InstallationExecutionGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>"SharenGo Java Legacy Reverse-Engineering" Use Case - Installation & Execution Guide</b>: How to install and execute this use case for building a SharenGo model from SharenGo Java source files.
		</td>		
		</tr>
		
		</table>
		
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">
		<a href="metamodels.php">
			<img src="../../resources/buttons/Metamodels_button.jpg"/>
		</a>
		</td>
		<td>
			The two provided metamodels are expressed in the Ecore format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/JavaLegacyReverseEngineering_MoDisco-UseCase_v1-0.zip">
			<img src="../../resources/buttons/Prototype_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>SharenGo Java Legacy Reverse-Engineering</b> use case (with all the required resources including the used metamodels).
			Note that all the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/use-cases/ARGIA-JavaAST/">MoDisco CVS</a>
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
				<li>March 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://benois@argia-engineering.fr">Jerome Benois</a> <br/> and <a href="mailto://belmonte@argia-engineering.fr">Laurent Belmonte</a>  (<a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering</a>)</li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.sharengo.org/">The SharenGo Group</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering Company</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>