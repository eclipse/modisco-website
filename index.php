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
	include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
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
	
	function getModiscoNews(){
		$xsl = new Xsltprocessor();
		$xsldoc = new DomDocument();
		$xsldoc->load("news/news.xsl");
		$xsl->importStyleSheet($xsldoc);
		
		$xmldoc = new DomDocument();
		$xmldoc->load("news/modiscoNewsArchive.rss");
		return $xsl->transformToXML($xmldoc); 
	}
	
	function getTwitter(){
		$xsl = new Xsltprocessor();
		$xsldoc = new DomDocument();
		$xsldoc->load("news/twitter.xsl");
		$xsl->importStyleSheet($xsldoc);
		
		$xmldoc = new DomDocument();
		$xmldoc->load("http://search.twitter.com/search.atom?q=modisco");
		return $xsl->transformToXML($xmldoc); 
	}
	
	$html = file_get_contents('_index.html');
	$news = getModiscoNews();
	# TODO $twitter = getTwitter();
	$html = str_replace("%%HEADLINES%%", $news, $html);
	
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
