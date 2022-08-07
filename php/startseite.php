 <h1>Welcome to My Sercert Garden Kitchen</h1>
<h2>Here are the dates being fully booked out<br /><br /><br /></h2>
	


<?php

$antwort = mysqli_query($link, "Select * from reservation order by date "); 	 

//echo "<div class='flexibel'>";
while($b = mysqli_fetch_array($antwort))
{
	
	//echo $b["bookingNo"]."";		# PK
	echo "<table border='1' width='30%'>";
	echo "<br /><tr>";
	echo "<br /><td>";
	echo "<b>Table Number:</b>".$b["tableNo"]."<br /><br /><br />";
	echo $b["date"]." ";
	echo "<br /></tr>";
	echo "<br /></td>";
	echo "</table>";
	
	
	
	echo "<br />";
	
	
	echo "<br /><br />";
}
//echo "</div>";
echo "<br /><a href='?seite=reservation'>New Reservation</a>";

?>