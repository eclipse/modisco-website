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
	$pageKeywords	= "MDE, Reverse-Engineering, Model Discovery, Discoverer, Metamodel";
	$pageAuthor		= "Freddy Allilaire, Hugo Bruneliere";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('../news/scripts/news.php');
	$modisconews = get_modisconews(10);
		
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
						MoDisco (for Model Discovery) is an Eclipse GMT component for model-driven reverse engineering. The objective is to allow practical extractions of models from legacy systems. 
						Because of the widely different nature and technological heterogeneity of legacy systems, there are several different ways to extract models from such systems. MoDisco 
						proposes a generic and extensible metamodel-driven approach to <b><a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">model discovery</a></b>. A basic framework and a set of guidelines are provided to the Eclipse contributors to bring 
						their own solutions to discover models in various kinds of legacy.
						<br /><br />
						Due to the highly diversified nature of the considered legacy, MoDisco is a collaborative component involving many organizations. Each of them will bring its own expertise in 
						a given area. A common infrastructure, inspired by the OMG KDM recommendation, will allow integrating all these contributions.
						<br /><br />
						As a GMT component, MoDisco will make good use of other GMT components or solutions available in the Eclipse Modeling Project (EMF, M2M, GMF, TMF, etc), and more generally of 
						any plugin available in the Eclipse environment.
				      	<br /><br />
				      	The creation and the launch of the MoDisco component has been realized in the context of the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
				      	<br /><br />
				      	<a href="about.php">more about MoDisco &raquo;</a> | <b><a href="useCases">MoDisco Use Cases &raquo;</a> </b>
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
								<b><a href="roadmap.php">MoDisco Roadmap</a></b>
		  					</td>
							<td align="right">
								<a href="doc/"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
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
								<b><a href="interestedParties.php">Interested Parties</a></b>
		  					</td>
							<td align="right">
								<a href="interestedParties.php"><img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" height="42" width="42" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="relatedProjects.php">Related projects</a></b>
		  					</td>
							<td align="right">
								<a href="relatedProjects.php"><img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" height="42" width="42" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="doc/">Documentation</a></b>, <b><a href="http://wiki.eclipse.org/index.php/MoDisco">Wiki</a></b>
		  					</td>
							<td align="right">
								<a href="doc/"><img align="right" src="../resources/images/reference.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco">Newsgroup</a></b>,
					            <a href="http://www.eclipse.org/search/search.cgi">Search</a>,
					            <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.modeling.gmt.modisco">Web Interface</a>,
					            <a href="http://dev.eclipse.org/newslists/news.eclipse.modeling.gmt.modisco/threads.html">Archive</a>
		  					</td>
							<td align="right">
								<a href="news://news.eclipse.org/eclipse.modeling.gmt.modisco"><img align="right" src="../resources/images/news.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				                <b><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco">CVS</a></b>
		  					</td>
							<td align="right">
								<a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/MoDisco"><img align="right" src="../resources/images/cvs.gif" valign="top"/></a>
							</td>
						</tr>
					</table>
				</li>
			</ul>
		</div>

		<div class="homeitem">
			$modisconews
		</div>
		<hr class="clearer" />
	</div>

	<!-- Right Part -->
	<div id="rightcolumn">
	
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="about.php">Component description</a></li>
				<!--<li><a href="doc/MoDisco_Flyer-Poster_1.0.pdf">Component flyer-poster</a></li>-->
				<li><a href="doc/MoDisco_Overview_1.0.pdf">Component overview (slides)</a></li>
				<li>----------</li>
				<li><a href="doc/">MoDisco Documentation</a></li>
				<li>----------</li>
				<li><b><a href="useCases">MoDisco Use Cases</a></b></li>
				<li>----------</li>
				<li><b><a href="http://wiki.eclipse.org/index.php/MoDisco">MoDisco Wiki Page</a></b></li>
				<li>----------</li>
			</ul>
		</div>
		
		<br>	
		<!--<SCRIPT TYPE="text/javascript" SRC="http://www.brainyquote.com/link/quotebr.js"></SCRIPT>-->
		
	</div>

EOHTML;


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
