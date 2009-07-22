<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# KDMSourceDiscoverer.php
	#
	# Author: 		Fabien GIQUEL
	# Date:			2009-04-03
	#
	# Description: presentation of KDM Source discoverer plugin in MoDisco project.
    # A basic discoverer from File System to models conforming to Source sub package from KDM metamodel.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - KDM Source Discovery Tool";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, KDM, File System, Physical Artifacts";
	$pageAuthor		= "Fabien Giquel";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> KDM Source Discovery Tool</h1>

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
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>

		<p align="justify">
	    	Modernization, Model, Reverse-engineering, KDM, Physical Artifacts
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">

            This tool is about discovering a model out of an application files hierarchy, which conforms to the sub-package <i>Source</i> of <a href="../../infrastructure/KDM">KDM metamodel</a>.
            The <i>Source</i> package defines a set of metamodel elements whose purpose is to represent the physical artifacts of the existing system, such as source files, images, configuration files, resource descriptions, etc.
            <br>
            <br>
            This tool is provided by <a href="http://www.mia-software.com/">MIA-Software</a>.
    	</p>
        <p align="center">
	  		<img src="../resources/schemas/MoDisco_KDMSourceDiscoverer_Overview.jpg"/>
	  		<br /><br />
			<b>Tool overview</b>
		</p>

        <p align="justify">
            The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a>, named KdmSourceDiscoverer, visits an input folder, and uses a content type registry to choose a KDM artifact category.
            The discovering process is OS-independent.
        </p>
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases and Tools</a></h4>

		<p align="justify">
             The discoverer is appropriate along with others discoverers whose result conforms to KDM, since the KDM Source package also represents traceability links between instances of KDM meta-elements and the regions of source code.
             <br><br>
             Thus the discoverer participates to support these families of use cases :
            <ul>
				<li>retro-modeling (transformation of the resulting model to UML or a DSL)</li>
                <li>quality analysis (computation of metrics on the resulting model)</li>
                <li>refactoring (transformation of the resulting model and re-generation to Java)</li>
            </ul>
            <br>
    	</p>
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
		<tr>
		<td align="center">
		<a href="http://wiki.eclipse.org/MoDisco/KDMSourceDiscoverer">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>KDM Source discoverer user Guide</b>: How to use the discoverer for initializing KDM Source models.
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
		<a href="downloads/org.eclipse.gmt.modisco.kdm.source.discoverer_0.6.0.jar">
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>KDMSourceDiscoverer</b> plug-in.
			<br/>All the sources contained in the archive are also available from
 the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.kdm.source.discoverer/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>By <a href="mailto://fgiquel@mia-software.com">Fabien Giquel (Mia-Software)</a></li>
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