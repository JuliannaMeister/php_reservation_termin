<h2> Rerservation Page</h2>



<form method='post' enctype="multipart/form-data">

Name<br /> <!--customerdate tabelle-->
<input type="text" name="name" value="<?= @$name;?>" /><br />

Email<br />
<textarea name="email"><?= @$email;?></textarea><br />

Telephone Number<br />
<input type="text" name="telephone" value="<?= @$telephone;?>" /><br />

How many table you would like to book<br />
<input type="text" name="tableNo" value="1" /><br />

Notes<br />
<input type="text" name="notes" value="<?= @$notes?>" /><br />



<br />
<b>Reservation:</b><br /> <!--Reservation tabelle-->
<pre>

Date		<input type="date" name='date'><br />
How Many People	<input type="text" name='howmanyppl' value="<?= @$howmanyppl?>"><br />
Booking Number <input type="text"  name='bookingNo'  value="<?= @$bookingNo?>"><br />


</pre>



<br />
<input type="submit" name="new_reservation_speichern" />

</form>


