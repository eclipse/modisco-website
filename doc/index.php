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
	$pageTitle 		= "MoDisco Documentation";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1>$pageTitle</h1>
				</td>
				<td align="right">
					<img alt="MoDisco Logo" src="../resources/logoMoDiscoSmall.jpg" valign="top" />
				</td>
			</tr>
		</table>

		<h3>Documentation</h3
		<p>
          <ul class="midlist">
            <li>
		      <a href="MoDisco_Proposal_1.0.pdf">
		      MoDisco Proposal</a>: Proposal for the MoDisco component.
			</li>
		  </ul>
		</p>
		
      	<hr class="clearer" />
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
