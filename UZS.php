<?php
	//https://www.rba.gov.au/rss/rss-cb-exchange-rates.xml
	
	$feed = getUrlContent('https://cbu.uz/ru/arkhiv-kursov-valyut/xml/all/2026-11-04/');
	if (!empty($feed)) {
	file_put_contents("UZS.xml", $feed);
	}
?>