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
	$pageTitle 		= "MoDisco Use Case - Performance-Annotated UML2 State Charts";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Performance, Annotations, UML2, State Charts, Profiles";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Performance-Annotated UML2 State Charts</h1>

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
	    	Performance, Annotations, UML2, State Charts, Profiles 
    	</p>
		
		<br>

		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This use case covers both the <i>Model Discovery</i> and <i>Model Understanding</i> phases. It is about discovering performance information from an Excel file and building a Trace model from these data (<b>Model Discovery</b>). Then, this generated model is computed in order to produce a Metrics model whose data are finally used to automatically apply a "Performance" profile to a UML2 state chart (<b>Model Understanding</b>).   
	    	<br /><br />
	    	This use case is provided by <b><a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a></b> and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081). 
	    	<br /><br />
	    	The overall approach is summarized in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_PerformanceAnnotatedUmlStateCharts_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Performance-Annotated UML2 State Charts" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <b>Model Discovery</b> phase is implemented by applying the XML Discovery general methodology, i.e. the input Excel file is saved in the Excel XML format, injected into a <i>XML</i> model which is then transformed into a domain-specific model thanks to two successive <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformations</a>. The created model conforms to the <i>Trace</i> metamodel.
	  		<br/><br/>
	  		The <b>Model Understanding</b> phase is also implemented by using <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformations</a>. A <i>Metrics</i> model, containing the data concerning the computed metrics, is first generated from the <i>Trace</i> model. This <i>Metrics</i> model is then used, in association with the UML2 State Chart & "Performance" UML2 profile input models, in order to produce the performance-annotated UML2 state chart output model (note that this last step uses the <a href="http://wiki.eclipse.org/ATL_Superimposition">ATL superimposition</a> facility).  
	  		<br/><br/>
			All the metamodels mentioned in the previous schema (and so used within this use case) are available at the <a href="#download">Download section</a>.
	  	<br/><br/>
			We provide below a set of screenshots showing the different input/output files provided/created with this use case:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/PerformanceAnnotatedUmlStateCharts_Screenshots.png"/>
	  		<br /><br />
			<b>Screenshots of the input/outputs of the <i>Performance-Annotated UML2 State Charts</i> use case</b>
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<p align="justify">
			None at the current time.
	    <!--
	    	<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
    			<tr>
					<td ALIGN=center><h4>Choose a use case</h4></td>
		
					<td align="center">
						<h2> <a href="../ExecutionTracesMetrics/">Execution Traces Metrics</a> </h2>
					</td>
		
					<td>
	    				This use case presents an implementation, using the same overall methodology and tools, of the generation and visualization of other kinds of metrics from the same type of execution traces and performance data expressed in an Excel format. 
    				</td>
    			</tr>
    			<tr>
					<td ALIGN=center></td>
		
					<td align="center">
						<h2> <a href="../SemanticGroupingOnUmlClassDiagrams/">Semantic Grouping On <br/>UML2 Java Class Diagrams</a> </h2>
					</td>
		
					<td>
	    				This use case presents another possible use of UML2 models with model transformations: the computation of different semantic abstractions (i.e. the building of <i>SemanticGrouping</i> models) from discovered UML2 models representing Java class libraries. 
    				</td>
    			</tr>
    			<tr></tr>
    		</table>
    	-->
    	</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<p align="justify">
	    	No documents available at the current time.
    	</p>
		
		<br>
		
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
			The provided metamodels are expressed in the Ecore format and also (for most of them) in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<a href="downloads/PerformanceAnnotatedUmlStateCharts_MoDisco-UseCase_v1-0.zip">
			<img src="../../resources/buttons/Prototype_button.jpg"/>
		</a>
		</td>
		<td>
			First complete version of the <b>Performance-Annotated UML2 State Charts</b> use case (you must also get the <a href="http://www.eclipse.org/modeling/mdt/downloads/?project=uml2">Eclipse/MDT UML2 component</a> as well as the <a href="http://wiki.eclipse.org/index.php/ATL/How_Install_ATL_From_CVS/">Uml4Atl ATL driver</a>).
			<br/>Note that all the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco/use-cases/PerformanceAnnotatedUmlStateCharts_MoDisco-UseCase/">MoDisco CVS</a>
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
				<li>July 2007</li>
				<li style="list-style:none"><br/></li>
				<li>By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/bruneliere">Hugo Bruneliere (INRIA)</a></li>
				<li style="list-style:none"><br/></li>
				<li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">MoDisco newsgroup</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model transformation language)</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.eclipse.org/modeling/mdt/?project=uml2">Eclipse/MDT UML2 component</a></li>
				<li style="list-style:none">----------</li>
				<li><a href="http://www.uml.org/">OMG UML official site</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>