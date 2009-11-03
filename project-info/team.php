<?php
$PR = "modeling/gmt/modisco";
$PR = "modisco";
ob_start();
?>
<div id="midcolumn">
<img style="float:right" src="resources/logoMoDiscoSmall.jpg" alt="MoDisco Logo"/>
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
<!--<?php-->
<!--include_once $_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/team-common.php";-->
<!--?>-->
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/gmt/modisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>