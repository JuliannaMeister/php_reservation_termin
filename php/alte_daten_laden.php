<?php
$antwort = mysqli_query($link, "select * from customerdata join reservation on customerdata.customerNo= reservation.customerNo WHERE reservation.bookingNo = ".$_GET["reservation"]); ##SELECT * FROM `customerdata` WHERE customerNo = customerNo

$datensatz = mysqli_fetch_array($antwort); ## datensatz ..dataset in the Datenbank 

    $name       = $datensatz["name"];
	$email      = $datensatz["email"];
	$telephone  = $datensatz["telephone"];
	$notes      = $datensatz["notes"];
    

	$date      = $datensatz["date"];
	$howmanyppl= $datensatz["howmanyppl"];
	$tableNo   = $datensatz["tableNo"];
	$bookingNo = $datensatz["bookingNo"];
	$customerNo = $datensatz["customerNo"];



