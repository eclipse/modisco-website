<?php

	# set default theme
	$_theme = "Lazarus";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
	<STYLE TYPE="text/css">
	  .sideitem { border-width: 1px 1px; }
	  body { font-size: small; }
	  #midcolumn { margin-top: 5px; }
	</STYLE>

EOBRANDING;
	$Menu->setProjectBranding($branding);

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.gmt", "", 1);
	$Nav->addNavSeparator("GMT", "/gmt/");
	$Nav->addCustomNav("Download", "/gmt/download/", "_self", 1);
	$Nav->addCustomNav("Documentation", "/gmt/doc/", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/GMT", "_self", 1);
	$Nav->addCustomNav("MoDisco", "/gmt/modisco/", "_self", 1);
	$Nav->addCustomNav("Components", ".", "_self", 2);
	$Nav->addCustomNav("Use Cases", "/gmt/modisco/useCases/", "_self", 3);
	$Nav->addCustomNav("Technologies", "/gmt/modisco/technologies/", "_self", 3);
	$Nav->addCustomNav("Infrastructure", "/gmt/modisco/infrastructure/", "_self", 3);
	$Nav->addCustomNav("Download", "/gmt/modisco/download/", "_self", 2);
	$Nav->addCustomNav("Documentation", "/gmt/modisco/doc/", "_self", 2);
	$Nav->addCustomNav("Roadmap", "http://wiki.eclipse.org/MoDisco/Project_Plan", "_self", 3);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MoDisco", "_self", 3);
	$Nav->addCustomNav("Community", ".", "_self", 2);
	$Nav->addCustomNav("SVN", "http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_MODISCO", "_self", 3);
	$Nav->addCustomNav("Newsgroup", "news://news.eclipse.org/eclipse.modisco", "_self", 3);
	$Nav->addCustomNav("Submit a bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=GMT", "_self", 3);
	$Nav->addCustomNav("Open bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=MoDisco", "_self", 3);
	$Nav->addCustomNav("Contributors", "/gmt/modisco/contributors.php", "_self", 3);
	$Nav->addCustomNav("Interested Parties", "/gmt/modisco/interestedParties.php", "_self", 2);
	$Nav->addCustomNav("Related Projects", "/gmt/modisco/relatedProjects.php", "_self", 2);
	
?>
