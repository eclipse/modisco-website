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
	$pageTitle 		= "MoDisco Use Case - Eclipse/BIRT Project Sample Database";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Eclipse, BIRT, Database";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Eclipse/BIRT Project Sample Database</h1>

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
	    	Relational database, tuples, business reporting, <a href="http://www.eclipse.org/birt/phoenix/">Eclipse/BIRT project</a>  
    	</p>
		
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This complete use case covers a complex <i>Model Discovery</i> phase. It is about discovering the information on the content of the "Classic Models" <a href="http://www.eclipse.org/birt/phoenix/db/">BIRT sample database</a>, by using the database content discovery facility of the <a href="../../toolBox/RelationalDBInformation/">generic "Relational Database Information" discovery tool</a> (from the <a href="../../toolBox">MoDisco tool box</a>), and then generating a specific ClassicModels model. 
	    	<br /><br />
	    	This use case is provided by <b>INRIA AtlanMod</b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_BIRTSampleDB_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Eclipse/BIRT Project Sample Database" Use Case's Overview</b>
		</p>
		<p align="justify">
			The complete <b>Model Discovery</b> phase is implemented by applying two consecutive steps:
			<ul>
			<li>
			The first one is about retrieving the database content information from the "Classic Models" database by using the <a href="../../toolBox/RelationalDBInformation/">"Relational Database Information" discovery tool</a>'s provided facilities. The result is a model that conforms to the generic <i>RelationalDBContent</i> metamodel.
			</li>
			<br/>
			<li>
			The second one is about mapping the generic <i>RelationalDBContent</i> metamodel to the specific <i>ClassicModels</i> metamodel by using an <a href="http://www.eclipse.org/m2m/atl/">ATL transformation</a>. The result is a model that conforms to the specific <i>ClassicModels</i> metamodel.
	  		</li>
	  		</ul>
	 		<br/>
			All the metamodels mentioned in the previous schema (and so used within this use case) are available at the <a href="#download">Download section</a>.
	  	<br/><br/>
			We provide below a screenshot showing the ClassicModels output model generated with this use case:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/BIRTSampleDB_ModelExcerpt.png"/>
	  		<br /><br />
			<a name="BIRTSampleDB_Screenshot"><b>Screenshot of the generated ClassicModels output model</b></a>
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
		<a href="downloads/BIRTSampleDB_InstallationUserGuide.pdf">
			<img src="../../resources/buttons/InstallationExecutionGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>"Eclipse/BIRT Project Sample Database" Use Case - Installation & Execution Guide</b>: How to install and execute this use case for building a ClassicModels model from the tuples stored into the "Classic Models" database.
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
			All the provided metamodels are expressed in the Ecore format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
			Due to IP restrictions, the zoos of metamodels are not currently available anymore from <i>Eclipse.org</i>. However, the metamodels used within this use case are included in the project you can download below.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/org.eclipse.gmt.modisco.usecase.birtsampledb_v0.2.zip">
			<img src="../../resources/buttons/Prototype_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>Eclipse/BIRT Project Sample Database</b> use case (with all the required resources including the used metamodels).
			Note that all the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewsvn/index.cgi/examples/trunk/org.eclipse.gmt.modisco.usecase.birtsampledb/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>February 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/bruneliere">Hugo Bruneliere (INRIA)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.eclipse.org/birt/phoenix/">Eclipse/BIRT project</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.eclipse.org/birt/phoenix/db/">BIRT Sample Database</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.mysql.com">MySQL Database Management System</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="../../toolBox/RelationalDBInformation/">"Relational Database Information" discovery tool (MoDisco Tool Box)</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>