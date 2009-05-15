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
	$pageTitle 		= "MoDisco Use Case - Unix File System";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Unix, File System";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Unix File System</h1>

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
	    	Unix, File System, Bash 
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	   		This use case is about discovering the file tree of a Unix system and building a model representing it. The model produced conforms to a very simple Unix file system metamodel (which is described and provided in the <a href="#download">Download section</a>).
	   		<br /><br />
	    	This use case is provided by <b>INRIA AtlanMod</b> and its development is being supported by the <a href="http://www.modelplex.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_UnixFileSystem_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Unix File System" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a> is named <b>UnixFSDiscoverer</b>. It is a hand-written Bash script which has been developped focusing on the metamodel. It uses a set of basic command line tools available on any Unix system. The created model conforms to the <b>UnixFS metamodel</b>.
	  		<br/><br/>
			We defined this metamodel for simply describing the Unix file system. It only contains basic concepts of file systems such as TextFile and DirectoryFile (as everything is a File in Unix systems). Each File has a name, an owner and a group. Finally, a directory can contains files (i.e. textual files or directories). This metamodel is available at the <a href="#download">Download section</a>.
			<br/><br/>
			We provide below a short excerpt, representing the <i>/etc</i> files list of a standard Unix distribution, of a model (in Ecore format) created by using this discoverer:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/UnixFileSystem_ModelExcerpt.png"/>
	  		<br /><br />
			<a name="UnixFileSystem_ModelExcerpt"><b>Excerpt (representing the <i>/etc</i> files list of a standard Unix distribution) of a model produced by the discoverer</b></a>
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
		<!--<a href="downloads/UnixFSDiscoverer_InstallUse.pdf">-->
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>UnixFSDiscoverer Installation & User Guide</b>: How to install and use the discoverer for building file tree models from Unix file system's paths.
			<br/>Not available
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
<!--
		<td align="center">

		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#UnixFS">
			<img src="../../resources/buttons/Metamodel_button.jpg"/>		
		</a>

		</td>
		<td>
			<b>UnixFS metamodel</b> expressed in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#UnixFS">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual formatSchema, or in the <a href="downloads/UnixFS.png">PNG</a> and <a href="downloads/UnixFS.vsd">Visio</a> formats.	
			Due to IP restrictions, the zoos of metamodels are not currently available anymore from <i>Eclipse.org</i>.
		</td>		
		</tr>
		
		<tr>
		<td></td>
-->
		<td align="center">
<!--
		<a href="downloads/UnixFSDiscoverer.zip">
-->
			<img src="../../resources/buttons/Prototype_button.jpg"/>
<!--		
		</a>
-->
		</td>
		<td>
<!--
			A first version of the prototype.
			<br />All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/use-cases/UnixFileSystem/">MoDisco CVS</a>
-->
			Due to IP restrictions, the prototype is not currently available from <i>Eclipse.org</i>.
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
				<li>December 2006</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/mikael_barbero">Mikael Barbero (INRIA)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://en.wikipedia.org/wiki/Unix_File_System">Unix File System (Wikipedia)</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>