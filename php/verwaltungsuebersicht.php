<h2>Administration overview</h2>
<?php
####################add the suchen.php now 
include("suchen.php");

$bedingungen = "";
if(isset($_SESSION["suche"]) && $_SESSION["suche"] != "")
{
	$bedingungen = "
	where
	(
    name LIKE '%".$_SESSION["suche"]."%'
	OR
	email LIKE '%".$_SESSION["suche"]."%'
	
	OR 
	telephone LIKE '%".$_SESSION["suche"]."%'
	OR
	date LIKE '%".$_SESSION["suche"]."%'
	)
	";
}

//$sql_befehl = "select * from customerdata $bedingungen order by name"; 

$sql_befehl = "select * from customerdata JOIN reservation ON customerdata.customerNO = reservation.customerNO $bedingungen order by name"; 




//$antwort = mysqli_query($link, $sql_befehl);

############################################################################################################
//$antwort = mysqli_query($link, "select * from customerdata JOIN  reservation order by name");
$antwort = mysqli_query($link, $sql_befehl);
echo "<br /><a href='?seite=reservation'>New Booking</a>";
while($datensatz = mysqli_fetch_array($antwort)) //datensatz.....records from the data... dataset
{
	
	
    echo "<table border='1' width='30%'>";
	echo "<br /><tr>";
	echo "<br /><td>";
	echo "<b>Name:</b>".$datensatz["name"]."<br /><br />";
	echo "<b>Email:</b>".$datensatz["email"]."<br /><br /> ";
	echo "<b>Telephone Number:</b>".$datensatz["telephone"]."<br />";
	echo "<br /><br /> ";
	
	echo "<b>Date:</b>".$datensatz["date"]."<br /><br />";
	echo "<b>How Many People:</b>".$datensatz["howmanyppl"]."<br /><br /> ";
	echo "<b>Booking Number:</b>".$datensatz["bookingNo"]."<br />";
	
	echo "<br />";
	//echo "<a href ='?seite=verwaltung&unterseite=bearbeiten=".$datensatz["bookingNo"]."'>Bearbeiten</a>"; need to practise again !!
	echo "<a href ='?seite=verwaltung&unterseite=bearbeiten&reservation=".$datensatz["bookingNo"]."'>Bearbeiten</a>";
	echo "<a href='?seite=verwaltung&unterseite=loeschen&reservation=".$datensatz["bookingNo"]."'>Löschen</a>";	
	echo "<br /></tr>";
	echo "<br /></td>";
	echo "</table>";
		
}





