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
	$pageTitle 		= "MoDisco Tool - CSharp Language Metamodel Implementation";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, KDM, CSharp, C#, Microsoft";
	$pageAuthor		= "Gabriel Barbier";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - CSharp Language Metamodel Implementation</h1>

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
		<table border="0" width="100%">
			<COLGROUP>
				<COL width="2%"/>
				<COL width="98%"/>
			</COLGROUP>
		<tr>
			<td></td>
			<td>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>

		<p align="justify">
	    	Modernization, Model, CSharp, C#, Reverse-engineering
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
  
            This component offers an EMF implementation of <a href="http://msdn.microsoft.com/en-us/vcsharp/aa336809.aspx">C# Language Specification</a> in version 2.x or later.
            <br />
            .Net Platform is the premier platform for rapidly developing
            and deploying secure, portable applications that run on server and desktop systems.
            C# 2.0 is a significant release including many new features and updates while
            preserving compatibility and stability.
            C# 3.0 is the current major release of .Net platform, and happily it does not modify the language specification except support of LINK.
            As a consequence, the current metamodel is still up-to-date to reverse any C# application which doesn't use LINK features.

    	</p>

		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases and Tools</a></h4>

	    <table border="0" width="100%">
			<COLGROUP>
				<COL width="25%"/>
				<COL width="75%"/>
            </COLGROUP>
            <tr>
				<td align="center">
<h2> <a href="../../technologies/CSharp">CSharp Discoverer</a> </h2>
				</td>
				<td>
Then the goal of CSharp Discoverer tool is to allow practical extractions of CSharp models from a CSharp file or project. The CSharp models could also be converted in KDM models.
    			</td>
    		</tr>
    	</table>
    	
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>
	    <table border="0" width="100%">
			<COLGROUP>
				<COL width="25%"/>
				<COL width="75%"/>
            </COLGROUP>
            <tr>
				<td align="center"><a href="http://wiki.eclipse.org/MoDisco/CSharp"><img src="../../resources/buttons/InstallationUserGuide_button.jpg"/></a></td>
				<td>Then the goal of CSharp Discoverer tool is to allow practical extractions of CSharp models from a CSharp file or project.</td>
    		</tr>
    	</table>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table border="0" width="100%">
			<COLGROUP>
				<COL width="25%"/>
				<COL width="75%"/>
            </COLGROUP>
    		<tr>
                <td align="center">
            		<a href="downloads/org.eclipse.gmt.modisco.csharp_0.6.0.jar">
<img src="../../resources/buttons/Discoverer_button.jpg"/>
                    </a>
                </td>
                <td>
First complete version of the <b>CSharp</b> plug-in.
<br/>All the sources contained in the archive are also available from
the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.csharp/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li><a href="http://msdn.microsoft.com/en-us/vcsharp/aa336809.aspx">CSharp specification</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://msdn.microsoft.com/en-us/library/618ayhy6(VS.80).aspx">MSDN Reference for C#</a></li>
			</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>