<?php
$product_id = 12; # MDT/MoDisco
$committers = array(
 	# taken from http://www.eclipse.org/projects/project_summary.php?projectid=modeling.m2m
 	"hbrunelie" => "modeling.mdt",
 	"gbarbier" => "modeling.mdt",
	"nbros" => "modeling.mdt",
	"gdupe" => "modeling.mdt",
	"fgiquel" => "modeling.mdt"
 	
);

$extra_IP = array(
);

$third_party = array(
	"ANTLR Runtime v3.0.0, cvsroot/tools/org.eclipse.orbit/org.antlr.runtime v3_0_0, Eclipse Public License Version 1.0, original antlrruntime.jar repackaged as an OSGi bundle, 1548, atl",
);

require_once ($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/ipquery-common.php"); 
doIPQueryPage(); ?>