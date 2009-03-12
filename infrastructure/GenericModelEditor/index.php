<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# model_browser.php
	#
	# Author: 		Nicolas Bros
	# Date:			2009-02-26
	#
	# Description: presentation of the MoDisco generic model browser.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - Generic Model Editor";
	$pageKeywords	= "MoDisco, model, modeling, model editing, UI, model browsing";
	$pageAuthor		= "Nicolas Bros";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Generic Model Editor</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<!-- <li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li> -->
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
	    	Model Browsing, Model Editing, Search, Infinite browsing, Extensibility
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
            

The MoDisco model editor is a generic and parameterizable feature-rich Ecore model editor. It can be used to browse and edit any Ecore model more easily than with the default sample Ecore editor, which is particularly useful when dealing with models discovered from large legacy systems.
</p>

<p>
Among its features are (this list is not exhaustive):
<ul>
<li>infinite browsing</li>
<li>browsing by metaclass</li>
<li>many display options</li>
<li>navigation history</li>
<li>search of instances</li>
<li>extensibility</li>
</ul>

</p>

<br>
<p style="text-align: center;">
<img src="../resources/excerpts/GenericModelEditor_MainUI.png" alt="MoDisco Model Browser UI" />
</p>




		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		<td align="center">
		<a href="http://wiki.eclipse.org/MoDisco/ModelBrowser">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			A more detailed description of the MoDisco Generic Model Editor on the Eclipse wiki.
		</td>
		</tr>

		</table>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		
		<td align="center">
		<a href="downloads/org.eclipse.gmt.modisco.common.editor_0.7.0.jar">
			<img src="../../resources/buttons/Tool_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>Generic Model Editor</b> plug-in.
			<br/>All the sources contained in the archive are also available from
the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.common.editor/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>By <a href="mailto://NBros@mia-software.com">Nicolas Bros</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/MoDisco/ModelBrowser">Model Editor page on Eclipse wiki</a></li>
			</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
