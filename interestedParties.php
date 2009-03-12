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
	$pageTitle 		= "MoDisco Interested Parties";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Interested Parties</h1>

		<a name="goals"></a>
		<img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
    	<p align="justify">
    		The MoDisco project has been initiated by the <a href="http://www.emn.fr/x-info/atlanmod/index.php/Main_Page">AtlanMod team</a>, <a href="http://www.inria.fr">INRIA</a>.
		</p>
		<p align="justify">
    		If you are interested in joining, as a user or contributor, please contact <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/bruneliere">Hugo Bruneliere</a>. 
		</p>
    	<p align="justify">
	    	Here is the current list of interested parties. This list will be regularly updated.
    	</p>
		<hr class="clearer" />

	    	<div class="homeitem">
				<h3>List of interested parties</h3>
	    	<ul class="midlist">
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
					    		<a href="http://www.emn.fr/x-info/atlanmod/index.php/Main_Page">INRIA AtlanMod</a>
		  					</td>
							<td align="right">
								<a href="http://www.emn.fr/x-info/atlanmod/index.php/Main_Page"><img align="right" src="http://www.sciences.univ-nantes.fr/lina/atl/inria.png" /></a>
							</td>
						</tr>
					</table>
	    		</li>
    			<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				    			<a href="http://adm.omg.org/">OMG ADM Task Force<br/>(Architecture Driven Modernization)</a>
		  					</td>
							<td align="right">
								<a href="http://adm.omg.org/"><img align="right" src="./resources/logoOMG-ADM.png" height="55" /></a>
							</td>
						</tr>
					</table>
    			</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.mia-software.com">MIA Software</a>
		  					</td>
							<td align="right">
								<a href="http://www.mia-software.com"><img align="right" src="./resources/logoMIA.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.sodius.com/">Sodius</a>
		  					</td>
							<td align="right">
								<a href="http://www.sodius.com/"><img align="right" src="./resources/logoSodius.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.obeo.fr/?&lang=en">Obeo</a>
		  					</td>
							<td align="right">
								<a href="http://www.obeo.fr/?&lang=en"><img align="right" src="./resources/logoObeo.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.francetelecom.com/en/group/rd/">France Telecom R&D</a>
		  					</td>
							<td align="right">
								<a href="http://www.francetelecom.com/en/group/rd/"><img align="right" src="./resources/logoFT.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.haifa.il.ibm.com/dept/services/mdet.html">IBM Haifa Research Lab</a>
		  					</td>
							<td align="right">
								<a href="http://www.haifa.il.ibm.com/dept/services/mdet.html"><img align="right" src="./resources/logoIBMHaifa.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.argia.fr/site-argia/html/accueil.html">Argia-Engineering</a>
		  					</td>
							<td align="right">
								<a href="http://www.argia.fr/site-argia/html/accueil.html"><img align="right" src="./resources/logoArgia.png" height="65" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.di.univaq.it">University of L'Aquila</a>
		  					</td>
							<td align="right">
								<a href="http://www.di.univaq.it"><img align="right" src="./resources/logoAquila.png" height="65" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.tuwien.ac.at/tu_vienna/">Vienna University of Technology</a>
		  					</td>
							<td align="right">
								<a href="http://www.tuwien.ac.at/tu_vienna/"><img align="right" src="./resources/logoVienna.png" height="65" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://ssel.vub.ac.be/ssel/">Vrije Universiteit Brussel (VUB): <br />System and Software Engineering lab</a>
		  					</td>
							<td align="right">
								<a href="http://ssel.vub.ac.be/ssel/"><img align="right" src="./resources/logoVUB.png" height="50" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.stragilis.fr/">Stragilis</a>
		  					</td>
							<td align="right">
								<a href="http://www.stragilis.fr/"><img align="right" src="./resources/logoStragilis.png" height="65" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.kdmanalytics.com/">KDM Analytics</a>
		  					</td>
							<td align="right">
								<a href="http://www.kdmanalytics.com/"><img align="right" src="./resources/logoKdmanalytics.gif" height="60" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://lig.imag.fr">Laboratoire d'Informatique de Grenoble</a>
		  					</td>
							<td align="right">
								<a href="http://lig.imag.fr"><img align="right" src="./resources/logoLig.jpg" height="65" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.ucv.ve">Universidad Central de Venezuela</a><br/>
	    			    		(member of the <a href="http://isys.ciens.ucv.ve">ISYS Research Group</a>)
		  					</td>
							<td align="right">
								<table>
									<tr>
										<td><a href="http://www.ucv.ve"><img align="right" src="./resources/logoUCV.png" height="65" /></a></td>
										<td><a href="http://isys.ciens.ucv.ve"><img align="right" src="./resources/logoIsys.png" height="65" /></a></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
	    		</li>
	    	</ul>
		</div>
		<hr class="clearer" />
	</div>

	</div>

	<div id="rightcolumn">

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
