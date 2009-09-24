<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Alessandra Bagnato
	# Date:			09-09-09
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "MoDisco Use Case - MOMOCS Travel Agency";
	$pageKeywords	= "MoDisco, Complex Systems Modernization, MOMOCS Metamodel, MOMOCS, ATL Transformations ";
	$pageAuthor		= "Alessandra Bagnato";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - MOMOCS Travel Agency</h1>

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
	    	Complex Systems Modernization, MOMOCS Metamodel, MOMOCS, ATL Transformations 
    	</p>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

		<p align="justify">
             
<p>
This use case proposes an usage scenario for MOMOCS Transformation Tool and MOMOCS XSM Editor. 
<p>
The Travel Agency use case describe a simple CMR application for traveling management and ordering in need of modernization. The incresed number of customers requires to update the database component to have a database component that could manage more connections. The following steps are to be followed to achieve this very simplified modernization scenario: 
<ul>
<li>
Create Travel Agency application model with MOMOCS XSM Editor 
</li>
<li>
Identify components to be replaced 
</li>
<li>
Find/Create component to be replaced 
</li>
<li>
Transform the model to replace the critical component with MOMOCS Transformation Tool 
</li>
<li>
Verify the generated Travel Agency application model with MOMOCS XSM Editor 
</li>
</ul>

<p>This use case is provided by SOFTEAM and TXT e-solutions its development has been supported by the IST European MOMOCS project (MOdel driven MOdernisation of Complex Systems, FP6-IP 034466). 

 
<p>
The Travel Agency represents a simple web-based CRM application that has to be modernized substituting a new component.
The case study contains, all the required XSM files conform to the MOMOCS Metamodel and an ATL model-to-model transformation. 

In particular it includes: 
<ul>
<li>
An XSM file (TravelAgency_MySQL.xsm) representing to be modernized system (TBMS) of the Travel Agency CRM application. This model has a "to-be-replaced" component which does not satisfy necessary constraints. 
<li>
</li>
an XSM file (Oracle.xsm) simulating the retrieval of a replacing component from having metric values able to satisfy the current constraints required by the need for modernization. 
<li>
</li>

A ComponentType replacement transformation pattern (ComponentType_Replacement_superimp.atl) provided by the XSM Transformation Tool and related resources (all supplied by the XSM Transformation Tool). This pattern is an ATL model-to-model transformation and allows replacing the "to-be-replaced" component with a new one. 
<li>
</li>

an XSM file (TravelAgency_MySQL_Oracle.xsm) containing both the "to-be-replaced" and "replacing" component and ready to be processed by the transformation pattern above. 
<li>
</li>
an XSM file (TravelAgency_Oracle.xsm) which is the output of the transformation pattern execution and its related EMF file (TravelAgencyFinal.xsm).The created model conforms to the MOMOCS metamodel. The MOMOCS metamodel mentioned used within this use case is available at the Download section. 
</ul>
We provide below a set of screenshots showing the different input/output files provided/created with this use case: 
<br/>

 <p style="text-align: center;">
<img src="../resources/excerpts/Replacement.jpg" alt="MOMOCS Travel Agency Component Replacement Screenshot" /> <br>MOMOCS Travel Agency Replacement Screenshot
</p>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
			</COLGROUP>
			<tr>
				<td ALIGN=center><h4>MOMOCS Travel Agency use case</h4></td>
				<td align="center">
					<a href="http://www.viewzone.org/momocs/index.php?option=com_docman&task=doc_download&gid=44&Itemid=19&SID=a4f4d5bdb7422ee466dc0258f025516e">
						<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>		
					</a>
				</td>
				<td>
					Get various screenshots of the different inputs/outputs of the MOMOCS Travel Agency use case.
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
		<!--<a href="downloads/org.eclipse.gmt.modisco.common.editor_0.7.0.jar">-->
			<img src="../../resources/buttons/Tool_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			Modisco version of the <b>Travel Agency Use Case</b>  is available from
the <a href="http://dev.eclipse.org/viewsvn/index.cgi/examples/trunk/org.eclipse.gmt.modisco.usecase.travelagency/?root=Modeling_MODISCO">MoDisco SVN</a>
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
				<li>By <a href="mailto://alessandra.bagnato@txt.it">Alessandra Bagnato</a> and <a href="mailto://andrey.sadovykh@softeam.fr">Andrey Sadovykh </a></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco forum</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				

  
 
<li> <a href="http://www.momocs.org"> MOMOCS web site </a> </li> 
<li> <a href="http://www.viewzone.org/momocs/index.php?option=com_content&task=view&id=40&Itemid=28">MOMOCS Travel Agency Demo (including all MOMOCS Suite) </li>

			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
