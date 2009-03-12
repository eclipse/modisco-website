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
	$pageTitle 		= "MoDisco Downloads";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Downloads</h1>
				</td>
				<td align="right">
					<img alt="MoDisco Logo" src="../resources/logoMoDiscoSmall.jpg" valign="top" />
				</td>
			</tr>
		</table>

		<h3>Downloads</h3
		<p>
		 	The available components can be already downloaded from the following pages: 
		 	<ul class="midlist">
            <li>
		      <b><a href="../useCases">Use case</a></b>
			</li>
			<br>
			<li>
		      <b><a href="../technologies">Technologies</a></b>
			</li>
			<br>
			<li>
		      <b><a href="../infrastructure">Infrastructure</a></b>
			</li>
		  	</ul>
		  	<br/>
        	More information on the project's general downloads will be provided soon.
		</p>
		
      	<hr class="clearer" />
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
