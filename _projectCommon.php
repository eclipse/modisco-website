<?php

	// project root
	$PR = "modeling/gmt/modisco";
	$PR_www = "gmt/modisco";
	$projectName = "MoDisco";
	$projects = array("MoDisco" => "modisco");
	//$projects = array();
	//$defaultProj = "modisco";

	$extraprojects = array(); //components with only downloads, no info yet, "prettyname" => "directory"
	$nodownloads = array(); //components with only information, no downloads, or no builds available yet, "projectkey"
	$nonewsgroup = array(); //components without newsgroup
	$nomailinglist = array(); //components without mailinglist
	$incubating = true; // components which are incubating
	$nomenclature = "Project"; //are we dealing with "components" or "projects"?
	
	$buildtypes = array(
		"R" => "Release",
		"S" => "Stable",
		"I" => "Integration",
		"M" => "Maintenance",
		"N" => "Nightly"
	);
	
	include_once $_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/scripts.php";

	# set default theme Lazarus -> Nova
	$_theme = "Nova";
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
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.gmt.modisco", "", 1);
	$Nav->addNavSeparator("GMT", "http://www.eclipse.org/gmt/");
	$Nav->addCustomNav("Download", "http://www.eclipse.org/gmt/download/", "_self", 1);
	$Nav->addCustomNav("Documentation", "http://www.eclipse.org/gmt/doc/", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/GMT", "_blank", 1);
	$Nav->addNavSeparator("MoDisco", "/gmt/modisco/");
	$Nav->addCustomNav("Components", "http://wiki.eclipse.org/MoDisco#Description", "_blank", 2);
	#$Nav->addCustomNav("Use Cases", "/gmt/modisco/useCases/", "_self", 3);
	#$Nav->addCustomNav("Technologies", "/gmt/modisco/technologies/", "_self", 3);
	#$Nav->addCustomNav("Infrastructure", "/gmt/modisco/infrastructure/", "_self", 3);
	$Nav->addNavSeparator("Downloads", "/gmt/modisco/downloads/");
	$Nav->addCustomNav("Installation", "/gmt/modisco/installation/", "_self", 3);
	$Nav->addCustomNav("Update site", "/gmt/modisco/updates/", "_self", 3);
	$Nav->addNavSeparator("Documentation", "/gmt/modisco/doc/");
	$Nav->addCustomNav("Roadmap", "http://wiki.eclipse.org/MoDisco/Project_Plan", "_blank", 3);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MoDisco", "_blank", 3);
	$Nav->addNavSeparator("Community", ".");
	$Nav->addCustomNav("SVN", "http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_MODISCO", "_blank", 3);
	$Nav->addCustomNav("Forum", "news://news.eclipse.org/eclipse.modisco", "_blank", 3);
	$Nav->addCustomNav("Forum (Web)", "http://www.eclipse.org/forums/eclipse.modisco", "_blank", 3);
	$Nav->addCustomNav("Submit a bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=GMT&component=MoDisco", "_blank", 3);
	$Nav->addCustomNav("Open bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?quicksearch=MoDisco", "_blank", 3);
	$Nav->addCustomNav("Contributors", "http://www.eclipse.org/gmt/modisco/project-info/team.php", "_self", 3);
	$Nav->addCustomNav("Interested Parties", "/gmt/modisco/interestedParties.php", "_self", 2);
	$Nav->addCustomNav("Related Projects", "/gmt/modisco/relatedProjects.php", "_self", 2);
	
?>
