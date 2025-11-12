<?php	
	$feed = getUrlContent('https://www.nbkr.kg/XML/daily.xml');
	if (!empty($feed)) {
	file_put_contents("KGS_daily.xml", $feed);
	}
	
	$feed_weekly = getUrlContent('https://www.nbkr.kg/XML/weekly.xml');
	if (!empty($feed_weekly)) {
		file_put_contents("KGS_weekly.xml", $feed_weekly);
	}

?>