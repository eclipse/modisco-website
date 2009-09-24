<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# model_browser.php
	#
	# Author: 		Matteo Miraz
	# Date:			2009-09-11
	#
	# Description: presentation of the MoDisco Metamodel and Simple Editor.
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "MoDisco Tool - MOMOCS Metamodel and Simple Editor";
	$pageKeywords	= "MoDisco, EMF metamodel, complex systems";
	$pageAuthor		= "Matteo Miraz";

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Tool - MOMOCS Metamodel and Simple Editor</h1>
  
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
				</COLGROUP>
				<tr>
	  				<td></td>
	  				<td>
	    				<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>
	    				<p align="justify">EMF metamodel, complex systems</p>
	    
	   					<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
	    				<p align="justify">
	      					The MODISCO MOMOCS Simple Editor is aiming to aid the evolution complex system
	    					<br/>
	      					Its main  Characteristics are:
	      					<ul>
								<li>Component-oriented </li>
								<li>Complexity Handling</li>
								<li>Focus on the architecture</li>
								<li>Supports vertical & horizontal system decomposition</li>
								<li>Integration with KDM (OMG) in progress</li>
	      					</ul>
	      					<br/>
	      					The metamodel is encoded using EMF. This allows different vendors to easily create a tightly coupled IDE for modernizing existing applications. Some proof-of-concepts eclipse plug-ins are also provided, with the purpose to show the possibility to harvest the architectural structure of existing systems, and produce an XSM model of the to-be-modernize system.
	    					<br/><br/>
	    					The contribution is composed of:
	    					<ul>
	      						<li>The EMF-based XSM metamodel and corresponding simple editor allowing the end-user to interact with metamodel elements both for visualizing it and for manually transforming it</li>
	      						<li>A J2EE model discoverer: analyzing the source artifacts of a Java 2 Enterprise Edition system, this tool is able to harvest its architectural structure, and produce the corresponding XSM model of the system.</li>
	    					</ul>
	   						
	    					<img src="../resources/excerpts/SimpleEditor-screenshot.jpg" alt="MOMOCS Metamodel and Simple editor" />
	    				</p>
	    				
	    				<br/><br/>
	    
	    				<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>
	    
	    				<table>
							<COLGROUP>
								<COL width="15%">
								<COL width="20%">
								<COL width="65%">
							</COLGROUP>
							<tr>
								<td ALIGN=center><h4>Notes on the Metamodel and Editor</h4></td>
								<td align="center">
									<a href="http://www.viewzone.org/momocs/index.php?option=com_docman&task=doc_download&gid=35&Itemid=19&SID=9af900e1535c169a3add8e79f9b20ac8">
										<img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>		
									</a>
								</td>
								<td>
		  							A more detailed description of the MoDisco MOMOCS metamodel and simple editor is  on  <a href="http://www.momocs.org">MOMOCS website</a>.
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
						    		Modisco version of the <b>MOMOCS metamodel and simple editor</b> plug-in.
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
	      <li>By <a href="mailto:miraz@elet.polimi.it">Matteo Miraz</a>, Dipartimento di Elettronica e Informazione, Politecnico di Milano</li>
	      <li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco forum</a></li>
	    </ul>
	  </div>
	  <div class="sideitem">
	    <h6>Related Links</h6>
	    <ul>
	      <li><a href="http://www.momocs.org">MOMOCS European Project website</a></li>
	      <li><a href="http://www.viewzone.org/momocs/index.php?option=com_docman&task=doc_download&gid=35&Itemid=19&SID=9af900e1535c169a3add8e79f9b20ac8">Notes on Metamodel</a></li>
	    </ul>
	  </div>
	
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
