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
	$pageTitle 		= "MoDisco Home page";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverer";
	$pageAuthor		= "Freddy Allilaire, Hugo Bruneliere";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	$modisconews = get_modisconews(7);
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Middle part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="80%">
					<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Home page</h1>
					<h3>Welcome</h3>
				      <p align="JUSTIFY">
						MoDisco (for Model Discovery) is an Eclipse-GMT project for model-driven reverse engineering. The objective is to allow practical extractions of models from legacy systems. 
						Because of the widely different nature and technological heterogeneity of legacy systems, there are several different ways to extract models from such systems. MoDisco 
						proposes a generic and extensible metamodel-driven approach to <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">model discovery</a></b>. A basic framework and a set of guidelines are provided to the Eclipse contributors to bring 
						their own solutions to discover models in various kinds of legacy.
						<br /><br />
						Due to the highly diversified nature of the considered legacy, MoDisco is a collaborative project involving several organizations. Each of them will bring its own expertise in 
						a given area. MoDisco will use as often as possible the solutions elaborated by the OMG ADM (Architecture Driven Modernization) Task Force. The latest information on ADM recommendations like the <a href="http://www.kdmanalytics.com/kdm">Knowledge Discovery Metamodel (KDM)</a>, GASTM or SMM may be found at <a href="http://adm.omg.org">http://adm.omg.org</a>.
						<br /><br />
						As a GMT project, MoDisco will make good use of other GMT projects or solutions available in the Eclipse Modeling Project (EMF, M2M, GMF, TMF, etc), and more generally of 
						any plugin available in the Eclipse environment.
				      	<br /><br />
				      	The creation and the launch of the MoDisco project has been realized in the context of the <a href="http://www.modelplex.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
				      	<br /><br />
				      	<a href="about.php">more about MoDisco &raquo;</a> 
				      	<!--
				      		| <b><a href="useCases">MoDisco Use Cases &raquo;</a> </b> | <b><a href="toolBox">MoDisco Tool Box &raquo;</a> </b>
				      	-->
				      </p>
		  		</td>
				<td align="right">
					<img align="right" src="resources/logoMoDiscoBig.jpg" valign="top" alt="MoDisco Logo" height="200" width="200" />
				</td>
			</tr>
		</table>
		
		<hr/>
		
		<div class="homeitem">
			<h3>Quick Navigator</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="useCases">Use Cases</a></b>
		  					</td>
							<td align="right">
								<a href="useCases"><img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" height="42" width="42" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="technologies">Technologies</a></b>
		  					</td>
							<td align="right">
								<a href="technologies"><img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" height="42" width="42" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="infrastructure">Infrastructure</a></b>
		  					</td>
							<td align="right">
								<a href="infrastructure"><img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" height="42" width="42" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="http://wiki.eclipse.org/MoDisco/Project_Plan">Roadmap</a></b>,
								<b><a href="doc/">Documentation</a></b>, 
								<b><a href="http://wiki.eclipse.org/index.php/MoDisco">Wiki</a></b>
		  					</td>
							<td align="right">
								<a href="http://wiki.eclipse.org/index.php/MoDisco"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="news://news.eclipse.org/eclipse.modisco">Newsgroup</a></b>,
					            <a href="http://www.eclipse.org/search/search.cgi">Search</a>,
					            <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.modisco">Web Interface</a>,
					            <a href="http://dev.eclipse.org/newslists/news.eclipse.modisco/threads.html">Archive</a>
		  					</td>
							<td align="right">
								<a href="news://news.eclipse.org/eclipse.modisco"><img align="right" src="../resources/images/news.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				                <b><a href="http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_MODISCO">SVN</a></b>
		  					</td>
							<td align="right">
								<a href="http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_MODISCO"><img align="right" src="../resources/images/cvs.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
			</ul>
		</div>
	
		<div class="homeitem"> <!-- homeitem3col -->
			$modisconews
		</div>
		<hr class="clearer" />
	</div>

	<!-- Right Part -->
	<div id="rightcolumn">
	
		<div class="sideitem">
			<h6>Incubation</h6>
   				<div align="center"><a href="http://www.eclipse.org/projects/what-is-incubation.php"><img 
        			 align="center" src="../resources/images/egg-incubation.png" 
        			 border="0" alt="Incubation" /></a></div>
		</div>
		
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="doc/MoDisco_Flyer-Poster_1.0.pdf">Flyer-poster</a></li>
				<li><a href="doc/MoDisco_Overview_1.0.pdf">Overview (slides)</a></li>
				<li><a href="about.php">Description</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/MoDisco">Wiki</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Components</h6>
			<ul>
				<li><a href="useCases/">Use Cases</a></li>
				<li><a href="technologies/">Technologies</a></li>
				<li><a href="infrastructure/">Infrastructure</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>Utilities</h6>
			<ul>
				<li><a href="http://www.eclipse.org/modeling/emf/">EMF (Model Handling)</a></li>
				<li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model Transformation)</a></li>
				<li><a href="http://www.eclipse.org/gmt/amw/">AMW (Model Weaving)</a></li>
				<li><a href="http://www.eclipse.org/gmt/am3/">AM3 (Megamodeling)</a></li>
			</ul>
		</div>
		
		<br>
		
	</div>

EOHTML;


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
