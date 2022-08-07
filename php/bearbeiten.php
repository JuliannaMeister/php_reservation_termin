<?php
if(isset($_POST["new_reservation_speichern"]))
{
	
	
	
	
	
##new data !!!!
$date       = $_POST["date"];
$howmanyppl = $_POST["howmanyppl"];
$bookingNo  = $_POST["bookingNo"];

mysqli_query($link, "update reservation set date = '$date', howmanyppl = '$howmanyppl' where reservation.bookingNo = $bookingNo ");

}
echo"<h2> Editing </h2><br /><hr /><br />";
include("alte_daten_laden.php");
include("reservation.php");

?>
