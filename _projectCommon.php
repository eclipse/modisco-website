<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "solstice";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	# $Nav->setLinkList(array());
	# $Nav->addNavSeparator("MoDisco", "/modisco/");
	# $Nav->addCustomNav("Download", "http://wiki.eclipse.org/MoDisco/Installation", "_self", 3);
	# $Nav->addCustomNav("Documentation", "http://wiki.eclipse.org/MoDisco#Documentation", "_self", 3);
	# $Nav->addCustomNav("Support", "http://wiki.eclipse.org/MoDisco#Support", "_self", 3);
	# $Nav->addCustomNav("Involvement", "http://wiki.eclipse.org/MoDisco#Getting_involved", "_self", 3);
	
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/modisco/", "_self");
	$Menu->addMenuItem("Download", "http://wiki.eclipse.org/MoDisco/Installation", "_self");
	$Menu->addMenuItem("Documentation", "http://wiki.eclipse.org/MoDisco#Documentation", "_self");
	$Menu->addMenuItem("Support", "http://wiki.eclipse.org/MoDisco#Support", "_self");
	$Menu->addMenuItem("Developers", "http://wiki.eclipse.org/MoDisco#Getting_involved", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="modisco.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	
	$App->Promotion = TRUE;
	
?>