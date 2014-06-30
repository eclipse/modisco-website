<?php
/*******************************************************************************
 * Copyright (c) 2009, 2014 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Grégoire Dupé (Mia-Software)
 *	  Hugo Bruneliere (Inria)
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, modeling, emf, modisco, reverse engineering, modernization, mde";
	$pageAuthor		= "Gregoire Dupe, Hugo Bruneliere";
	$pageTitle 		= "MoDisco";
	
$html="";

$drops="modeling/mdt/modisco/downloads/drops";
$download_rootdir="/home/data2/httpd/download.eclipse.org/$drops/";
$archive_rootdir="/home/data2/httpd/download.eclipse.org/$drops/";
$http_prefix="http://www.eclipse.org/downloads/download.php?file=/";

function browse($rootdir){
$version_dirs = scandir($rootdir);
$arr=array();
$arr_sn=array();
$arr_version=array();
for ($i = 2 ; $i < count($version_dirs) ; $i++){
    $version = $version_dirs[$i];
    $qualifiers_dirs = scandir("$rootdir/$version");
    for ($j = 2 ; $j < count($qualifiers_dirs) ; $j++){
      $qualifier = $qualifiers_dirs[$j];
      $files = scandir("$rootdir/$version/$qualifier");
      for ($k = 2 ; $k < count($files) ; $k++){
          $xxx = $files[$k];
          if (substr($xxx, -strlen(".zip")) === ".zip"){
              $arr[]="$version/$qualifier/$xxx";
              echo "$version/$qualifier/$xxx";
              $arr_sn[]=$xxx;
              $arr_qualifier[]=$qualifier;
          }
      }
    }
}
return array(
    "path" => $arr,
    "shortname" => $arr_sn,
    "qualifier" => $arr_qualifier
);
}

function print_li($http_prefix,$drops,$result,$i){
    $html ="";
    $href="$http_prefix/$drops/".$result["path"][$i];
    $txt=$result["shortname"][$i];
    $html.="<li><a href='$href'>$txt</a></li>";
    return $html;
}

$result = browse($download_rootdir);
$html="<h1>Releases</h1>";
$html.="<ul>";
for ($i = 0 ; $i < count($result["shortname"]) ; $i++){
    $qualifier = $result["qualifier"][$i];
    if (strpos($qualifier, "R") === 0){
        $html.=print_li($http_prefix,$drops,$result,$i);
    }
}
$html.="</ul>";
$html.="<h1>Milestones</h1>";
$html.="<ul>";
for ($i = 0 ; $i < count($result["shortname"]) ; $i++){
    $qualifier = $result["qualifier"][$i];
    if (strpos($qualifier, "S") === 0){
        $html.=print_li($http_prefix,$drops,$result,$i);
    }
}
$html.="</ul>";



$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
