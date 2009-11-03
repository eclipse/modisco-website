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

ob_start();
?>

<div id="midcolumn">
<img alt="MoDisco Logo" src="../resources/logoMoDiscoSmall.jpg" valign="top" align="right"/>

<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Downloads</h1>

<h3>Using Eclipse Install manager</h3>
<br>
To install the different MoDisco plugins, just point your Install Manager to the following site.
<br>
<ul>
	<li>
		Location: <b><a href="http://download.eclipse.org/modeling/gmt/modisco/updates/">http://download.eclipse.org/modeling/gmt/modisco/updates/</a></b><br/>
	</li>
</ul>
<br>
<br>
It is also possible to download a zipped version of the MoDisco update site for the installation to proceed.
The archive is available from the location below.
<br>
<ul>
	<li>
		Location: <b><a href="http://www.eclipse.org/downloads/download.php?file=/modeling/gmt/modisco/downloads/site_MoDisco_0.7.0.zip&amp;format=zip">Download MoDisco 0.7.0 archived update site</a></b><br/>
	</li>
</ul>

<br>
<br>

<h3>How to add the MoDisco update site</h3>

There are several different ways to add a new update site to the list of sites available from the Install Manager.
 In all cases, the site location (i.e. the Web URL or the archived Update Site provided above) is the only required item.
 <br/>
To add the MoDisco site, one of the procedures described from the
 <a href="http://help.eclipse.org/galileo/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-129.htm" target="_blank">Install Manager documentation</a> must be followed.

<h3>Required configuration</h3>

In order to download MoDisco, the following projects must already be installed into your Eclipse:
<ul>
	<li>
		Java 5 (or higher) version of Java virtual machine
	</li>
    <li>
		Eclipse "Galileo" 3.5 (<a href="http://www.eclipse.org/galileo/" target="_blank">http://www.eclipse.org/galileo/</a>)
    </li>
    <li>
		<a href="http://www.eclipse.org/modeling/emf/downloads/?project=emf" target="_blank">EMF 2.5</a> 
    </li>
    <li>
		<a href="http://www.eclipse.org/modeling/mdt/downloads/?project=uml2" target="_blank">UML2 3.0</a>
    </li
    <li>
		<a href="http://www.eclipse.org/modeling/m2m/downloads/index.php?project=atl" target="_blank">ATL 3.0</a>
    </li>
    <li>
		<a href="http://www.eclipse.org/modeling/emf/downloads/?project=compare" target="_blank">EMF Compare 1.0</a>
    </li>
    <li>
		<a href="http://www.eclipse.org/modeling/m2t/downloads/?project=jet" target="_blank">JET 1.0</a>
    </li>
</ul>


<hr class="clearer" />
</div>

<!-- Right Part -->
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/gmt/modisco/right_column.php");


$html = ob_get_contents();
ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
