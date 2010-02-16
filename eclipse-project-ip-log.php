<?php 
$PR = "modeling.gmt";
$modisco = "gmt/modisco";
/*include_once($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/eclipse-project-ip-log-common.php"); */
?>
<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());
$projName = "MoDisco";
ob_start();
?>
<div id="midcolumn">
	<h1>IP Log</h1>
	
	<p>It is <a href="http://wiki.eclipse.org/Modeling_Project_Releng/Releasing#Maintaining_Your_IP_Log">everyone</a>'s responsibility to keep these logs up to date. Details below.	
	<blockquote><ul>
	<li><a href="http://wiki.eclipse.org/Modeling_Project_Releng/Releasing#Maintaining_Your_IP_Log">Maintaining Your IP Log</a></li>
	<li><a href="http://wiki.eclipse.org/Modeling_Project_Releng/Releasing/IP_Log">IP Log Rules</a></li>
	<li><a href="http://www.eclipse.org/projects/dev_process/ip-process-in-cartoons.php">IP Process</a></li>
	<li><a href="http://www.eclipse.org/legal/EclipseLegalProcessPoster.pdf">Due Diligence / Legal Processes</a></li>
	</ul></blockquote>

	<div class="homeitem3col">
		<h3>Generated IP Log</h3>
		<p>New for Ganymede, the IP log can now be generated from Bugzilla. There are two version available:</p>
		
		<ul>
			<li><a href="http://www.eclipse.org/<?php print $modisco; ?>/project-info/ipquery.php">Modeling IP Log</a> (note <a href="http://www.eclipse.org/<?php print $PR; ?>/project-info/ipquery.php#Note">Data Inclusion limitations</a>)</li>
			<li><a href="http://www.eclipse.org/projects/ip_log.php?projectid=<?php print str_replace("/",".",$PR); ?>">Foundation IP Log</a> (under development -- see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=220977">bug 220977</a>)</li>
		</ul>			
		
	</div>
	
	<div class="homeitem3col">
		<h3>Static IP Log(s)</h3>
		<p>Overall IP log, listing all committers and contributors. <b style='color:red'>These are most likely out of date.</b></p>
		<ul>
			<li><?php print $projName; ?> <a href="eclipse-project-ip-log.csv">IP Log</a></li>
		</ul>
		
		<?php 
		$out = "";
		$out .= " 
		<p>Individual per-component IP Logs:</p>
		
		<ul>";
		$gotOne = false;
		$tries = array("/eclipse-project-ip-log.csv", "/project-info/eclipse-project-ip-log.csv");
		foreach ($projects as $name => $prefix)
		{
			$gotThis = false;
			foreach ($tries as $try)
			{
				if (!$gotThis && is_file($prefix.$try))
				{
					$out .= '<li>' . $name . ' <a href="'.$prefix.$try.'">IP Log</a>' . '</li>';
					$gotThis=true;
				}
				$gotOne = $gotOne || is_file($prefix.$try) ? true : false;
			}
			if (!$gotThis)
			{
				#$out .= '<li>' . $name . ': <i>n/a</i>' . '</li>';
			}
		}
		$out .= "</ul>";
		if ($gotOne)
		{
			print $out;
		}

print "</div>\n";
print "</div>\n";

print "<div id=\"rightcolumn\">\n";

if (isset($incubating) && sizeof($incubating) > 0)
{ ?>
<div class="sideitem">
   <h6>Incubation</h6>
   <p>Some components are currently in their <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p>
   <div align="center"><a href="http://www.eclipse.org/projects/what-is-incubation.php"><img
        align="center" src="http://www.eclipse.org/images/egg-incubation.png"
        border="0" /></a></div>
 </div>
<?php } ?>

<div class="sideitem">
   <h6>Committers &amp; Contributors</h6>
   <ul><li><a href="http://www.eclipse.org/<?php print $modisco; ?>/project-info/team.php">Meet The Team</a></li></ul>
</div>

<div class="sideitem">
	<h6>See Also</h6>
	<ul>
	<li><a href="http://wiki.eclipse.org/Modeling_Project_Releng/Releasing#Maintaining_Your_IP_Log">Maintaining Your IP Log</a></li>
	<li><a href="http://wiki.eclipse.org/Modeling_Project_Releng/Releasing/IP_Log">IP Log Rules</a></li>
	<li><a href="http://www.eclipse.org/projects/dev_process/ip-process-in-cartoons.php">IP Process</a></li>
	<li><a href="http://www.eclipse.org/legal/EclipseLegalProcessPoster.pdf">Due Diligence / Legal Processes</a></li>
	</ul>
</div>
	
</div>
<?php

$html = ob_get_contents();
ob_end_clean();

$pageTitle = "Eclipse Modeling - $projName - IP Log";
$pageKeywords = ""; // TODO: add something here
$pageAuthor = "";

$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>