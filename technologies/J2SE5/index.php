<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# j2se5.php
	#
	# Author: 		Gabriel Barbier
	# Date:			2009-04-03
	#
	# Description: presentation of J2SE5 metamodel plugin in MoDisco project.
    # It is an EMF implementation of Java language specification version 3.0.
    # Indeed, it corresponds to J2SE version 5.x or later.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - Java Language (J2SE5) Metamodel Implementation";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, KDM, Java, J2SE5, j2se5, J2SE, JDK, Eclipse JDT";
	$pageAuthor		= "Gabriel Barbier";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - Java Language (J2SE5) Metamodel Implementation</h1>

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
	    	Modernization, Model, Java, Reverse-engineering, Eclipse JDT
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
  
            This component offers an EMF implementation of <a href="http://java.sun.com/j2se/1.5.0/">Java Language Specification</a> in version 5.x or later.
            <br />
            Java Platform, Standard Edition (Java SE) software is the premier platform for rapidly developing
            and deploying secure, portable applications that run on server and desktop systems spanning most
            operating systems. J2SE 5.0 is a significant release including many new features and updates while
            preserving compatibility and stability.
            Java SE 6 is the current major release of the Java SE platform, and happily it does not modify the language specification.
            As a consequence, the current metamodel is still up-to-date to reverse any java application.

    	</p>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases and Tools</a></h4>

		<p align="justify">
	    	<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
                <tr>
					<td align="center">
						<h2> <a href="../J2SE5Discoverer">Java 2 Standard Edition v5.0 Discoverer</a> </h2>
					</td>
					<td>
	    				The goal of Java Discoverer tool is to allow practical extractions of J2SE5 models from a Java project. The J2SE5 models could also be converted in KDM models.
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
		<a href="http://wiki.eclipse.org/MoDisco/J2SE5">
			<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
		</a>
		</td>
		<td>
			<b>J2SE5 Installation Guide</b>: How to install the metamodel for building J2SE5 models.
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
		<a href="downloads/org.eclipse.gmt.modisco.j2se5_0.6.0.jar">
			<img src="../../resources/buttons/Discoverer_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>J2SE5</b> plug-in.
			<br/>All the sources contained in the archive are also available from
 the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.j2se5/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>By <a href="mailto://gbarbier@mia-software.com">Gabriel Barbier (Mia-Software)</a></li>
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