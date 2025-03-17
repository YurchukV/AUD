<?php
	$ctx = stream_context_create(array('http'=>
		array(
			'timeout' => 200,  //1200 Seconds is 20 Minutes
		)
	));
	$feed = file_get_contents('https://www.sbv.gov.vn/TyGia/faces/ReraSbvOc.jspx', false, $ctx);
	if !(empty($feed)) {
		file_put_contents("ReraSbvOc.jspx", $feed);
	}
?>