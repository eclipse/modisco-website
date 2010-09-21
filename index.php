<?php
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Grégoire Dupé (Mia-Software)
 *******************************************************************************/
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
	
	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, emf, facet";
	$pageAuthor		= "Grégoire Dupé";
	$pageTitle 		= "MoDisco";
	
	function getMoDiscoNews(){
		$xsl = new Xsltprocessor();
		$xsldoc = new DomDocument();
		$xsldoc->load("news/news.xsl");
		$xsl->importStyleSheet($xsldoc);
		
		$xmldoc = new DomDocument();
		$xmldoc->load("news/modiscoNewsArchive.rss");
		return $xsl->transformToXML($xmldoc); 
	}
	$html = file_get_contents('_index.html');
	$news = getMoDiscoNews();
	$html = str_replace("%%HEADLINES%%", $news, $html);
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="modisco.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$pageKeywords="MDA, MDE, MoDisco, Model Discovery, Quality Assurance, Documentation, Improvement,Migration, EMF, Eclipse";
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
