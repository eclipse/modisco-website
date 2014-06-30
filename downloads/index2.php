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

$drops="facet/downloads/drops";
$rootdir="/home/data/httpd/download.eclipse.org/$drops/";
$html.=$rootdir;
$http_prefix="http://www.eclipse.org/downloads/download.php?file=/";
$version_dirs = scandir($rootdir);
$html.="<ul>";
for ($i = 2 ; $i < count($version_dirs) ; $i++){
    $version = $version_dirs[$i];
$html.="<li>$version</li>";
    $qualifiers_dirs = scandir("$rootdir/$version");
    #print_r($qualifiers_dirs );
$html.="<ul>";
        for ($j = 2 ; $j < count($qualifiers_dirs) ; $j++){
            $qualifier = $qualifiers_dirs[$j];
            $files = scandir("$rootdir/$version/$qualifier");
            for ($k = 2 ; $k < count($files) ; $k++){
                $xxx = $files[$k];
                if (substr($xxx, -strlen(".zip")) === ".zip"){
$html.="<li><a href='$http_prefix/$drops/$version/$qualifier/$xxx'>$xxx</a></li>";
        }
            }
         }
$html.="</ul>";
 }
$html.="</ul>";

$html.="";
	
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
