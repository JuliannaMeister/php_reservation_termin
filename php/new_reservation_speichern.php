<?php


	
	//echo "<pre>";
	//print_r($_POST);
	
	//echo "</pre>";
	//die();
	
	$name      = $_POST["name"];
	$email     = $_POST["email"];
	$telephone = $_POST["telephone"];
	$notes     = $_POST["notes"];
	$date      = $_POST["date"];
	$howmanyppl= $_POST["howmanyppl"];
	$tableNo   =  $_POST["tableNo"];

mysqli_query($link, "insert into customerdata(name, email,telephone, notes) values('$name','$email','$telephone','$notes')"); # Datanbank customerdata 
echo "<br />";


 #go to Datenbank and Primärschlüssel, reservation seite...customerNo Tabelle					  
$customerNo_pk = $link->insert_id; # primärschlüssel = print_r($link)
mysqli_query($link, "insert into reservation(customerNo_fk, date, howmanyppl,tableNo) values('$customerNo_pk','$date','$howmanyppl','$tableNo')");
echo "<br />";
	
	
	
#...how i can get the limited 24 tables for the booking and get into the Datenbank???
for($i = 1 ; $i <= 24; $i++)
{
$a = mysqli_query($link, "select * from reservation where date = '$date' and tableNo = $i"); # $date is from the formular 

print_r($a);

echo $i;
echo "<br />";
if($a->num_rows == 0) break;
}

$tableNo = $i;
echo $tableNo;
if($tableNo <= 24){
	
 mysqli_query($link, "insert into reservation(customerNo, date, howmanyppl,tableNo) values('$customerNo_pk','$date','$howmanyppl','$tableNo')");
 echo "<br />";
  $bookingNo_pk = $link->insert_id; #go to Datenbank and Primärschlüssel, reservation seite...bookingNo Tabelle
	echo "Booking Successfull ". $bookingNo_pk;
	echo "<hr /><br />";
	echo "<a href='?seite=start'>back to ...</a>";
	

}
else{ echo "voll"; }



 
