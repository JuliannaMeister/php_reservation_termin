<?php 
if(isset($_POST["loeschen_ja"]))
{
	include("alte_daten_laden.php");
	
	mysqli_query($link, "delete from reservation where reservation.bookingNo = $bookingNo "); 
	mysqli_query($link, "delete from customerdata where customerdata.customerNo = $customerNo ");
	header("Location: ?seite=verwaltung");
	exit;
}
########################
else if(isset($_POST["loeschen_nein"]))
{
	header("Location: ?seite=verwaltung");
	exit;	
}
		

else
{
	echo "<h2>The Reservation is deleted.</h2><br /><hr /><br />";
	
	include("alte_daten_laden.php");
	include("loeschbestaetigung.php");
}

