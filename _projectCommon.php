<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "solstice";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.mdt.modisco", "", 1);
	$Nav->addNavSeparator("MDT", "http://www.eclipse.org/mdt/");
	$Nav->addCustomNav("Download", "http://www.eclipse.org/modeling/mdt/downloads/", "_self", 1);
	$Nav->addCustomNav("Documentation", "http://www.eclipse.org/modeling/mdt/docs.php", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MDT", "_blank", 1);
	$Nav->addNavSeparator("MoDisco", "/MoDisco/");
	$Nav->addCustomNav("Components", "http://wiki.eclipse.org/MoDisco/Components", "_blank", 2);
	#$Nav->addCustomNav("Use Cases", "/MoDisco/useCases/", "_self", 3);
	#$Nav->addCustomNav("Technologies", "/MoDisco/technologies/", "_self", 3);
	#$Nav->addCustomNav("Infrastructure", "/MoDisco/infrastructure/", "_self", 3);
	$Nav->addNavSeparator("Downloads", "/MoDisco/downloads/");
	$Nav->addCustomNav("Installation", "/MoDisco/installation/", "_self", 3);
	$Nav->addCustomNav("Update site", "/MoDisco/updates/", "_self", 3);
	$Nav->addNavSeparator("Documentation", "/MoDisco/doc/");
	$Nav->addCustomNav("Project Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=modeling.mdt.modisco", "_self", 3);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MoDisco", "_blank", 3);
	$Nav->addNavSeparator("Community", ".");
	$Nav->addCustomNav("SVN", "http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_MODISCO", "_blank", 3);
	$Nav->addCustomNav("Forum", "news://news.eclipse.org/eclipse.modisco", "_blank", 3);
	$Nav->addCustomNav("Forum (Web)", "http://www.eclipse.org/forums/eclipse.modisco", "_blank", 3);
	$Nav->addCustomNav("Submit a bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=MDT&component=MoDisco", "_blank", 3);
	$Nav->addCustomNav("Open bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;bug_status=UNCONFIRMED;bug_status=NEW;bug_status=ASSIGNED;bug_status=REOPENED;component=MoDisco;component=MoDisco-Contribution;component=MoDisco-Infrastructure;component=MoDisco-Technologies;component=MoDisco-UseCases;classification=Modeling;product=MDT", "_blank", 3);
	$Nav->addCustomNav("Contributors", "http://www.eclipse.org/MoDisco/project-info/team.php", "_self", 3);
	$Nav->addCustomNav("Interested Parties", "/MoDisco/interestedParties.php", "_self", 2);
	$Nav->addCustomNav("Related Projects", "/MoDisco/relatedProjects.php", "_self", 2);
	
	$pageKeywords	= "eclipse, modeling, emf, modisco, reverse engineering, mde";
	$pageAuthor		= "Gregoire Dupe, Hugo Bruneliere";
	$pageTitle 		= "MoDisco";
	
?>