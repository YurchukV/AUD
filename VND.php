<?php
	$feed = file_get_contents('https://www.sbv.gov.vn/TyGia/faces/ReraSbvOc.jspx');
	file_put_contents("ReraSbvOc.jspx", $feed);
?>