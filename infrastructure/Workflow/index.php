<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Gabriel Barbier
	# Date:			2009-07-13
	#
	# Description: presentation of MoDiscoWorkflow plugin in MoDisco project.
    # 
    # It provides a simple workflow dedicated to Discoverers.
    # It has an export feature to MWE (a full featured workflow engine)
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - MoDisco Workflow";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, Workflow";
	$pageAuthor		= "Gabriel Barbier";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - MoDisco Workflow</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<!-- <li><a href="#relatedUseCases"><b>Related Use Cases and Tools</b></a></li> -->
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
	    	Modernization, Model, Java, Reverse-engineering, Eclipse, Workflow, Discoverer chain
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
  
            MoDisco workflow provides a simple mechanism to initialize and launch a workflow of discoverers,
            generators and model transformations.
            It provides a simple engine with basic features, yet there is connection with <a href="http://www.eclipse.org/modeling/emft/?project=mwe">MWE</a>,
            a full featured workflow engine.
    	</p>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		<td align="center">
		<a href="http://wiki.eclipse.org/MoDisco/Workflow">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>MoDisco Workflow Installation Guide</b>: A complete description to install and use MoDisco Workflow.
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
		<a href="downloads/org.eclipse.gmt.modisco.workflow_0.6.0.jar">
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>MoDisco Workflow</b> plug-in.
			<br/>All the sources contained in the archive are also available from
 the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.workflow/?root=Modeling_MODISCO">MoDisco SVN</a>
		</td>
		</tr>

		</table>



		</td>
		</tr>
		</table>
		</div>

		<hr class="clearer" />
	</div>


	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li>July 2009</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="mailto://npayneau_stage@mia-software.com">Nicolas Payneau (Mia-Software)</a></li>
				<li>By <a href="mailto://gbarbier@mia-software.com">Gabriel Barbier (Mia-Software)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>