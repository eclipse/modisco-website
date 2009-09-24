<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# model_browser.php
	#
	# Author: 		Alessandra Bagnato
	# Date:			2009-09-11
	#
	# Description: presentation of the MoDisco Metamodel and Simple Editor.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - Generic Model Editor";
	$pageKeywords	= "MoDisco, model, modeling, model editing, UI, model browsing";
	$pageAuthor		= "Alessandra Bagnato";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - MOMOCS Transformation Tool</h1>

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
	    	ATL Transformations Editing, ATL Transformation patterns, ATL transformations over the MOMOCS metamodel, Cheat Sheets to guide users , complex systems
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
             
The MODISCO MOMOCS Transformation Tool is Aiding the evolution of a To Be Modernized System (TBMS) model into a Modernized System (MS) model by following the Xirup methodology
<p>
Its main  Characteristics
are:
<ul>
<li>Advanced editing</li>
<li>Embedded transformations and  resources to foster the modernization on the Xirup metamodel</li>
<li>Transformation patterns for reusable transformations</li>
<li>Transformation chains</li>
<li>Eclipse-integrated interactive tutorials including advanced transformations </li>
<li>Metrics generation
</li>
</ul>
<p>
 
 
The contribution is composed of a set of Eclipse plug-ins that heavily extend and improve functionalities from ATLAS ATL and target them to the Xirup metamodel.
<p>

The XSM Transformation Tool is an environment where MOMOCS transformations are created, modified and executed. It consists of six main components:
<ul>
<li>

 

Editing is for creating or customizing transformations by means of special-targeted views like the Xirup Rule Designer and ATL Operations or key-bind activated syntax templates.
</li>
 <li>
ATL4Xirup is a set of wizards providing fundamental resources for MOMOCS transformations. It also gives the possibility to select among a set of Transformation Patterns which are highly reusable transformations defined for common modernization situations.
Transformation Chain is for the automatic creation of <i>chain scripts</i> (defined in Ant) that are used to execute a sequence of transformations where the output of a transformation is the input of the immediately following one.
</li>
 <li>
Cheat Sheets is for providing users with a set of interactive tutorial totally integrated in Eclipse. These tutorials also contain a set of advanced example transformations for UML2Xirup, Xirup2UML and model querying.
</li>
 <li>
Context Actions includes a set of useful functionalities defined for some Eclipse resources such Project, Ecore and Xsm files.
</li>
 <li>
 Metrics creation from Xsm models is an example.
</li>
 <li>
Online Help is the XSM Transformation Tool voice inside the Eclipse Online Help
</li>
 </ul>

</p>

 <br>
<p style="text-align: center;">
<img src="../resources/excerpts/TTScreenshot.jpg" alt="MOMOCS Transformation Tool" />
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
				<td ALIGN=center><h4>MOMOCS Transformation Tool</h4></td>
				<td align="center">
					<a href="http://www.viewzone.org/momocs/index.php?option=com_docman&task=doc_download&gid=44&Itemid=19&SID=a4f4d5bdb7422ee466dc0258f025516e">
						<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>		
					</a>
				</td>
				<td>
					A more detailed description of the MoDisco MOMOCS Transformation Tool is available from the <a href="http://www.momocs.org">MOMOCS website</a>.
				</td>
			</tr>
		</table>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="25%">
				<COL width="75%">
			</COLGROUP>
			<tr>
				<td align="center">
		    		<!--<a href="downloads/org.eclipse.gmt.modisco.common.editor_0.7.0.jar">-->
		      			<img src="../../resources/buttons/Tool_button.jpg"/>
		    		<!--</a>-->
		  		</td>
				<td>
					MoDisco version of the <b>MOMOCS Transformation Tool</b> plug-in.
					<br/>All the sources contained in the archive are also available from
					the <a href="http://dev.eclipse.org/viewsvn/index.cgi/incubation/trunk/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>September 2009</li>
				<li>By <a href="mailto://alessandra.bagnato@txt.it">Alessandra Bagnato</a> Corporate Research Division - TXT e-solutions</li> 
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco forum</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>

<ul type=disc>
 <li><a href="http://www.momocs.org">MOMOCS European Project website</a></li>
 <li><a href="http://www.viewzone.org/momocs/index.php?option=com_docman&amp;task=doc_download&amp;gid=44&amp;Itemid=19&amp;SID=a4f4d5bdb7422ee466dc0258f025516e">MOMOCS Transformation Tool User Guide </a></li>
</ul>
		</div>

	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
