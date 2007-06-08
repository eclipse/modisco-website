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
	$pageTitle 		= "MoDisco Use Case - Generating Java Platform Ontologies";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Generating Java Platform Ontologies</h1>

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
	    	Java, UML, Platform, Ontology 
    	</p>
		
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		<p align="justify">
			This complete use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about reverse engineering the Java API from the class library JAR files using the <a href="http://ssel.vub.ac.be/ssel/research:mdd:jar2uml">Jar2UML discovery tool</a> (part of the MoDisco tool box), generating OWL ontologies from the created UML models using <a href="http://www.eclipse.org/m2m/atl/">ATL model transformations</a>, and finally bundling these ontologies with the <a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">PlatformKit</a> Eclipse plugin.
		</p>
		<p align="justify">
			This use case is provided by the <a href="http://ssel.vub.ac.be/ssel/">Vrije Universiteit Brussel (VUB) System and Software Engineering Lab</a> and its development has been realized by <a href="http://ssel.vub.ac.be/ssel/about:members:denniswagelaar">Dennis Wagelaar</a>. 
		</p>
		<p align="justify">
	    	The <a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">PlatformKit</a> tool uses platform ontologies to reason about platform dependencies introduced by model-driven software artefacts, such as models and model transformations. These ontologies provide a base vocabulary that explains what a <i>platform</i> is. Ontologies that are specific to a particular platform, such as Java, can be defined on top of this general platform vocabulary.
    	</p>
		<p align="justify">
			The Java ontologies consist of one main Java ontology that describes the general domain of Java platforms and several Java API ontologies that describe what each particular Java standard provides to the software developer. While the general Java ontology is handwritten, just like the base platform ontologies, the Java API ontologies are generated from the class libraries that come with the various Java development kits.	
	  	</p>
		<p align="justify">
			First, the Java API is reverse engineered from the class library JAR files using the <a href="http://ssel.vub.ac.be/ssel/research:mdd:jar2uml">Jar2UML discovery tool</a>. This results in a UML model that describes the class structure of the API.
	  	</p>
	  	<p align="justify">
			Next, the generated UML models are transformed to OWL ontologies using the <a href="http://ssel.vub.ac.be/viewcvs/viewcvs.py/PlatformKit/platformkit-java/transformations/UML2ToPackageAPIOntology.atl?view=markup">UML2ToPackageAPIOntology.atl</a> model transformation and the IODT ontology framework. This transformation is superimposed on top of the <a href="http://ssel.vub.ac.be/viewcvs/viewcvs.py/PlatformKit/platformkit-java/transformations/UML2ToAPIOntology.atl?view=markup">UML2ToAPIOntology.atl</a> model transformation, which contains all the OCL logic for calculating package dependencies. It also contains OCL logic to calculate compatibility relationships between the various Java APIs. Compatibility is only calculated up to a certain extent: compatibility and equivalence is calculated at package level, not at class/interface level. This results in sometimes unexpected incompatibilities between Java packages that one would expect to be backward compatible. The causes of these incompatibilities can be found in the ATL transformation build log of the model transformations that built the Java API ontologies.
	  	</p>
		<p align="justify">
			Finally, the generated ontologies are bundled with the <a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">PlatformKit</a> Eclipse plugin. Developers can express Java platform dependencies based on the concepts that are introduced by the Java platform ontologies.
	  	</p>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
	    	<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
				<tr>
					<td ALIGN=center><h4>Choose a use case</h4></td>
		
					<td align="center">
						<h2> <a href="http://ssel.vub.ac.be/ssel/research:mdd:casestudies:im">Instant Messenger<br/>Case Study</a> </h2>
					</td>
		
					<td>
	    				This is a medium-sized case study involving the automatic generation of an instant messaging client, based on context information. This case study is based on the instant messaging scenario, developed within the <a href="http://www.cs.kuleuven.be/~distrinet/projects/CoDAMoS/">CoDAMoS</a> project. The instant messaging client supports several network protocols (e.g. Jabber, SMS) and several user interfaces (e.g. AWT, Swing).
    				</td>
    	
    			</tr>
    			<tr></tr>
    		</table>
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
		<a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit:ontologies">
			<img src="../../resources/buttons/Description_button.jpg"/>
		</a>
		</td>
		<td>
			<b>"Generating Java Platform Ontologies" Use Case - Description</b>: General description of the use case, its objectives & principles, the obtained results, etc.
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
		<a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">
			<img src="../../resources/buttons/Prototype_button.jpg"/>
		</a>
		</td>
		<td>
			The <b>Generating Java Platform Ontologies</b> use case is performed thanks to the PlatformKit plugin which is freely available and downloadable using the provided link.
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
				<li>June 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="http://ssel.vub.ac.be/ssel/about:members:denniswagelaar">Dennis Wagelaar (VUB)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://java.sun.com/">Java Technology</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://ssel.vub.ac.be/ssel/research:mdd:platformkit">PlatformKit Eclipse plugin</a></li>
				<li style="list-style:none">----------</li>
				<a href="http://ssel.vub.ac.be/ssel/">VUB System and Software Engineering Lab</a>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>