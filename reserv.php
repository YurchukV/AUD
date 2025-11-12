<?php

//	date_default_timezone_set('UTC');
//	mysqli_report(MYSQLI_REPORT_OFF);

	
//	include('KZT.php');
//	include('RUB.php');
//	include('UZS.php');
//	include('UAH.php');
//	include('AZN.php');
//	include('BYN.php');
//	include('GEL.php');
//	include('MDL.php');
//	include('TJS.php');
//	include('MNT.php');
//	include('USD.php');
//	include('AED.php');
//	include('TRY.php');
//	include('TMT.php');
//	include('AMD.php');
	include('KGS.php');
	include('AUD.php');
//	include('BGN.php');
//	include('CNY.php');
//	include('NOK.php');
//	include('EUR.php');
//	include('PLN.php');
//	include('RON.php');
//	include('DKK.php');
//	include('CAD.php');
//	include('MMK.php');
//	include('CZK.php');
//	include('MYR.php');
//	include('THB.php');
//	include('CHF.php');
//	include('ILS.php');
//	include('NGN.php');
//	include('EGP.php');
//	include('AOA.php');
//	include('KHR.php');
//	include('IDR.php');
//	include('ETB.php');
//	include('RWF.php');
//	include('VND.php');
	
	function getUrlContent($url, $method = 0, $headers = null){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, $method);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
		curl_setopt($ch, CURLOPT_TIMEOUT, 50);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		if ($headers != null) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		$data = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return ($httpcode>=200 && $httpcode<300) ? $data : false;
	}
?>
