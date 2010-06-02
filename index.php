<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$localVersion = false;
	// this file will be updated via a cronjob (currently by user hbehrens every 10 mins)
	$pipesRequest = '/home/data/httpd/writable/xtext/news.php';
	$commitStatsRequest = '/home/data/httpd/writable/xtext/commitstats.txt';
    
	if($localVersion) {
		$commitStatsRequest = 'commitstats.txt';
		$pipesRequest = 'http://pipes.yahoo.com/pipes/pipe.run?_id=c90e6166f0e980bf8df929fce8213a4e&_render=php';
	}
	

	/**
	* word-sensitive substring function with html tags awareness
	* @param text The text to cut
	* @param len The maximum length of the cut string
	* @returns string
	* http://de2.php.net/manual/en/function.substr.php#92063
	**/
	function mb_substrws( $text, $len=180 ) {
	
	    if( (mb_strlen($text) > $len) ) {
	
	        $whitespaceposition = mb_strpos($text," ",$len)-1;
	
	        if( $whitespaceposition > 0 ) {
	            $chars = count_chars(mb_substr($text, 0, ($whitespaceposition+1)), 1);
	            if ($chars[ord('<')] > $chars[ord('>')])
	                $whitespaceposition = mb_strpos($text,">",$whitespaceposition)-1;
	            $text = mb_substr($text, 0, ($whitespaceposition+1));
	        }
	
	        // close unclosed html tags
	        if( preg_match_all("|<([a-zA-Z]+)|",$text,$aBuffer) ) {
	
	            if( !empty($aBuffer[1]) ) {
	
	                preg_match_all("|</([a-zA-Z]+)>|",$text,$aBuffer2);
	
	                if( count($aBuffer[1]) != count($aBuffer2[1]) ) {
	
	                    foreach( $aBuffer[1] as $index => $tag ) {
	
	                        if( empty($aBuffer2[1][$index]) || $aBuffer2[1][$index] != $tag)
	                            $text .= '</'.$tag.'>';
	                    }
	                }
	            }
	        }
	    }
	    return $text;
	}
	
	// http://pkarl.com/articles/contextual-user-friendly-time-and-dates-php/
	function contextualTime($small_ts, $large_ts=false) {
	  if(!$large_ts) $large_ts = time();
	  $n = $large_ts - $small_ts;
	  if($n <= 1) return 'less than 1 second ago';
	  if($n < (60)) return $n . ' seconds ago';
	  if($n < (60*60)) { $minutes = round($n/60); return 'about ' . $minutes . ' minute' . ($minutes > 1 ? 's' : '') . ' ago'; }
	  if($n < (60*60*16)) { $hours = round($n/(60*60)); return 'about ' . $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago'; }
	  if($n < (time() - strtotime('yesterday'))) return 'yesterday';
	  if($n < (60*60*24)) { $hours = round($n/(60*60)); return 'about ' . $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago'; }
	  if($n < (60*60*24*6.5)) return 'about ' . round($n/(60*60*24)) . ' days ago';
	  if($n < (time() - strtotime('last week'))) return 'last week';
	  if(round($n/(60*60*24*7))  == 1) return 'about a week ago';
	  if($n < (60*60*24*7*3.5)) return 'about ' . round($n/(60*60*24*7)) . ' weeks ago';
	  if($n < (time() - strtotime('last month'))) return 'last month';
	  if(round($n/(60*60*24*7*4))  == 1) return 'about a month ago';
	  if($n < (60*60*24*7*4*11.5)) return 'about ' . round($n/(60*60*24*7*4)) . ' months ago';
	  if($n < (time() - strtotime('last year'))) return 'last year';
	  if(round($n/(60*60*24*7*52)) == 1) return 'about a year ago';
	  if($n >= (60*60*24*7*4*12)) return 'about ' . round($n/(60*60*24*7*52)) . ' years ago'; 
	  return false;
	}
	
	function getCommitStatsAndImage($request) {
		$lines = trim(file_get_contents($request));
		$commits = array();
		$dates = array();
		$milestones = array();
		foreach(array_slice(explode("\n", $lines), -19) as $index => $line) {
			// 200805	modeling	5833
			if(!preg_match('/20(\d{2})(\d{2})\s+modeling\s+(\d+)/' , $line, $matches))
				break;
			$data = $matches[3];
			// smooth data
			if($data > 5000)
				$data = 5000 + ($data - 5000) / 10;
			array_push($commits, $data);
			
			// dates
			$date = $matches[1] . "/" . $matches[2];
			if($index % 6 == 0)
				array_push($dates, $date);
			else
				array_push($dates, "");
				
			// milestones
			switch($date) {
				case "08/08":
					array_push($milestones, "M1");
					break;
				case "08/12":
					array_push($milestones, "M4");
					break;
				case "09/03":
					array_push($milestones, "M6");
					break;
				case "09/06":
					array_push($milestones, "Galileo");
					break;
				case "09/10":
					array_push($milestones, "M2");
					break;
				case "09/12":
					array_push($milestones, "M4");
					break;
				case "10/03":
					array_push($milestones, "M6");
					break;
				case "10/06":
					array_push($milestones, "Helios");
					break;
				default:
					array_push($milestones, "");		
			}
		}
		
		function getMoDiscoNews(){
			$xsl = new Xsltprocessor();
			$xsldoc = new DomDocument();
			$xsldoc->load("news/news.xsl");
			$xsl->importStyleSheet($xsldoc);
			
			$xmldoc = new DomDocument();
			$xmldoc->load("news/modiscoNewsArchive.rss");
			return $xsl->transformToXML($xmldoc); 
		}
	
		$chartUrl = "http://chart.apis.google.com/chart?cht=bvs&chco=DBD7EF&chs=260x125&chbh=10,1&chxt=x,x,r&chds=0,6000&chxr=2,0,6000";
		$chartUrl .= "&chd=t:" . implode(",", $commits);
		$chartUrl .= "&chxl=0:|" . implode("|", $milestones);
		$chartUrl .= "|1:|" . implode("|", $dates);
		$thisMonth = end($commits);
		$lastMonth = prev($commits); 
		
		return array($thisMonth, $lastMonth, $chartUrl);
	}
	
	$commitStatsAndImage = getCommitStatsAndImage($commitStatsRequest);
	$commitStatsThisMonth = $commitStatsAndImage[0];
	$commitStatsLastMonth = $commitStatsAndImage[1];
	$commitStatsImageURL = $commitStatsAndImage[2];
	
	# Paste your HTML content between the EOHTML markers!
	$html = file_get_contents('_index.html');

	# build headlines-pipe
	
	// Pipes Request
	$pipesSerialized = file_get_contents($pipesRequest);
	$pipesContent = unserialize($pipesSerialized);
	
	
	$pageTitle = "MoDisco";
	
	$news = getMoDiscoNews();
	$html = str_replace("%%HEADLINES%%", $news, $html);
	$html = str_replace("%%COMMIT_STATS_IMAGE%%", $commitStatsImageURL, $html);
	$html = str_replace("%%COMMIT_STATS_THIS_MONTH%%", $commitStatsThisMonth, $html);
	$html = str_replace("%%COMMIT_STATS_LAST_MONTH%%", $commitStatsLastMonth, $html);
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MoDisco News' href='news/modiscoNewsArchive.rss'>");
	$pageKeywords="MDA, MDE, MoDisco, Model Discovery, Quality Assurance, Documentation, Improvement,Migration, EMF, Eclipse";
	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
	#echo $headlines;
?>
