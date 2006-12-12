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
	$pageTitle 		= "MoDisco Use Case - Relational Database Schema";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Relational Database Schema</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#documentation"><b>Documentation</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>
    		    	
		<hr class="clearer" />

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This use case is about discovering information on database schemas from real databases stored into a DBMS. The objective is to express the database's schemas as models that conform to a database's schema metamodel. The overall approach is shown in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_RelationalDBSchema_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Relational Database Schema" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a> is named <b>DBSchemaDiscoverer</b>. It retrieves, by using the JDBC Java API, the information concerning a database schema from a specified database (stored into a DBMS such as MySQL) and injects these data into a model. This created model conforms to the <b>RelationalDBSchema metamodel</b>.
	  		<br/><br/>
			We defined this metamodel, which has been designed for describing the database schemas, by studying the SQL language and more particularly the <i>CREATE</i> statement. This metamodel is available at the <a href="#download">Download section</a>.
			<br/><br/>
			We provide below a short excerpt, representing the simple <i>Employees</i> table (taken from the <a href="http://www.eclipse.org/birt/phoenix/db/">BIRT Sample Database</a>), of a model (in Ecore format) created by using this discoverer:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/RelationalDBSchema_ModelExcerpt.png"/>
	  		<br /><br />
			<a name="RelationalDBSchema_ModelExcerpt"><b>Excerpt (representing the <i>Employees</i> table) of a model produced by the discoverer</b><a>
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a use case</h4></td>
		
		<td align="center">
		<a href="../RelationalDBContent/RelationalDBContent.php">
			<img src="../resources/buttons/RelationalDBContent_button.jpg"/>
		</a>
		</td>
		
		<td>
	    	This use case allows discovering information on the content of databases. The models it produces may be used in complementarity with those produced by the <i>Relational Database Schema</i> use case for performing complex operations (i.e. chains of transformations, weavings, etc).
    	</td>
    	
    	</tr>
    	<tr></tr>
    	</table>
		
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
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBSchema/downloads/DBSchemaDiscoverer_Description.pdf">-->
			<img src="../resources/buttons/Description_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>DBSchemaDiscoverer Description</b>: General description of the discoverer, its architecture, its possible uses, the RelationalDBSchema metamodel, etc.
			<br>Available soon...
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBSchema/downloads/DBSchemaDiscoverer_InstallationUserGuide.pdf">-->
			<img src="../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>DBSchemaDiscoverer Installation & User Guide</b>: How to install and use the discoverer for building database schema models from already existing databases.
			<br>Available soon... 
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
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#RelationalDBSchema">
			<img src="../resources/buttons/metamodel_button.jpg"/>
		</a>
		</td>
		<td>
			<b>RelationalDBSchema metamodel</b> expressed in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#RelationalDBSchema">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBSchema/downloads/DBSchemaDiscoverer_v1-0.zip">-->
			<img src="../resources/buttons/Discoverer_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			First version available soon...
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
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.mysql.com">MySQL Database Management System</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.postgresql.org/">PostgreSQL Database Management System</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.oracle.com">Oracle Database Management System</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>