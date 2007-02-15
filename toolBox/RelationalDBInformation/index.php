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
	$pageTitle 		= "MoDisco Tool - Relational Database Information Discovery Tool";
	$pageKeywords	= "Relational Database, DBMS, Java JDBC, MySQL, Schemas, Tuples ";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Relational Database Information Discovery Tool</h1>

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

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%"/>
				<COL width="98%"/>
			</COLGROUP>
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>
		
		<p align="justify">
	    	Relational Database, DBMS, Java JDBC, MySQL, Schemas, Tuples 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This tool is about discovering information from concrete relational databases stored into a DBMS. It is composed of two distinct but complementary discoverers: the retrieved information concerns both the schema (i.e. the structure) and the tuples (i.e. the content) of a database. The objective is to express this information as models that conform to a database's schema metamodel or to a database's content metamodel.
	    	<br /><br />
	    	This tool is provided by <b><a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a></b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach applied by this tool is summarized in the following figure: 
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_RelationalDBInformation_Overview.png"/>
	  		<br /><br />
	  		<b>"Relational Database Information" Tool Overview</b>
		</p>
		<p align="justify">
			The tool is composed of two <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverers</a> which are implemented using the generic interfaces provided by the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/plugins/">"org.eclipse.gmt.modisco.core" MoDisco base plug-in</a>. They retrieve, by calling the JDBC Java API, the information concerning the database schema and content from a specified database (stored into a DBMS such as MySQL for example) and inject these data into models. These created models respectively conform to the <b>RelationalDBSchema</b> and <b>RelationalDBContent</b> metamodels.
	  		<br/><br/>
			We defined these metamodel, which has been specificaly designed for describing the database information, by studying the SQL language and more particularly the <i>CREATE</i> statement. The two metamodels are available at the <a href="#download">Download section</a>.
			<br/><br/>
			We provide below two short excerpts of models produced using the tool discoverers. The first one represents the simple <i>Employees</i> table (taken from the <a href="http://www.eclipse.org/birt/phoenix/db/">BIRT Sample Database</a>), the second one represents a tuple of this table:	
	  	</p>
	  	<p align="center">
	  		<table>
				<COLGROUP>
					<COL width="50%">
					<COL width="50%">
				</COLGROUP>
				<tr>
	  				<td align="center">
	  					<img src="../resources/excerpts/RelationalDBSchema_ModelExcerpt.png"/>
	  				</td>
	  				<td align="center">
	  					<img src="../resources/excerpts/RelationalDBContent_ModelExcerpt.png"/>
	  				</td>
	  			</tr>
	  			<tr>
	  				<td align="center">
	  					<br />
						<b>Excerpt (representing the <i>Employees</i> table) of a RelationalDBSchema model</b>
	  				</td>
	  				<td align="center">
	  					<br />
	  					<b>Excerpt (representing a tuple of the <i>Employees</i> table) of a RelationalDBContent model</b>
	  				</td>
	  			</tr>
	  		</table>
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
			</COLGROUP>
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<!--<a href="downloads/DBInformationDiscoveryTool_Description.pdf">-->
			<img src="../../resources/buttons/Description_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>Tool Description</b>: General description of the discoverer, its architecture, its possible uses, the RelationalDBSchema and RelationalDBContent metamodels, etc.
			<br>Not yet available
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="downloads/DBInformationDiscoveryTool_InstallationUserGuide.pdf">-->
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>Tool Installation & User Guide</b>: How to install and use the discoverer for building database schema or content models from already existing databases.
			<br>Not yet available 
		</td>		
		</tr>
		
		</table>
		
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
			</COLGROUP>
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">
		<a href="metamodels.php">
			<img src="../../resources/buttons/Metamodels_button.jpg"/>
		</a>
		</td>
		<td>
			The provided <b>RelationalDBSchema</b> and <b>RelationalDBContent</b> metamodels are expressed in different formats such as the <b>Ecore</b> one, the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual one and are also available in the <b>PNG</b> and <b>Visio</b> formats.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/DBInformationDiscoveryTool_MoDisco-Tool_v1-0.zip">
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>Database Information Discovery Tool</b> plug-in (with all the required resources including a use example and the metamodels).
			All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/toolbox/org.eclipse.gmt.modisco.dbinfodiscoverer/">MoDisco CVS</a>
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
				<li style="list-style:none">----------</li>
				<li><a href="http://www.postgresql.org/">PostgreSQL Database Management System</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.oracle.com">Oracle Database Management System</a></li>
			</ul>
		</div>
	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>