<?php 																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "MoDisco Team";
	$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Discoverer";
	$pageAuthor		= "Gabriel Barbier";
	
ob_start();
?>
<div id="midcolumn">
<img style="float:right" src="../resources/logoMoDiscoSmall.jpg" alt="MoDisco Logo"/>
<h1>Meet The MoDisco Team</h1>
<h3>Contributors</h3>
<ul>
<li>Gabriel Barbier</li>
<li>Nicolas Bros</li>
<li>Hugo Bruneliere</li>
</ul>
<h3>Project leads</h3>
<ul>
<li>Hugo Bruneliere</li>
</ul>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/gmt/modisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>