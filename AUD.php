<?php
	//https://www.rba.gov.au/rss/rss-cb-exchange-rates.xml
	
	$feed = getUrlContent('https://www.rba.gov.au/rss/rss-cb-exchange-rates.xml');
	if (!empty($feed)) {
	file_put_contents("AUD.xml", $feed);
	}
?>