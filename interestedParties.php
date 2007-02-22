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
	$pageKeywords	= "";
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
    		The MoDisco component is initiated by the <a href="http://www.inria.fr/recherche/equipes/atlas.fr.html">ATLAS team</a>, <a href="http://www.inria.fr">INRIA</a>.
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
					    		<a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a>
		  					</td>
							<td align="right">
								<a href="http://www.inria.fr/recherche/equipes/atlas.en.html"><img align="right" src="http://www.sciences.univ-nantes.fr/lina/atl/inria.png" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				    			<a href="http://www.sciences.univ-nantes.fr/lina/atl/">University of Nantes</a>
		  					</td>
							<td align="right">
								<a href="http://www.sciences.univ-nantes.fr/lina/atl/"><img align="right" src="http://www.sciences.univ-nantes.fr/lina/atl/univ-nantes.jpg" height="55" /></a>
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
								<a href="http://www.mia-software.com"><img align="right" src="http://www.mia-software.com/img/logo.png" height="55" /></a>
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
