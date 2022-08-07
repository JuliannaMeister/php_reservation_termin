<a href="?seite=verwaltung">Back</a><br /><br /><hr /><br />

<b>Name:</b><br />
<?= @$name;?><br /><br />

<b>Email:</b><br />
<?= @$email;?><br /><br />

<b>Telephone Number:</b><br />
<?= @$telephone;?><br /><br />

<b>How many table you would like to book:</b><br />
<?= @$tableNo;?><br /><br />

<b>Notes:</b>
<?= @$notes;?><br /><br />

<br />
<br />
<b>Reservation:</b><br /><br />
<b>Date:</b>
<?= @$date;?><br /><br />

<b>How Many People:</b>
<?= @$howmanyppl;?><br /><br />

<b>Booking Number:</b>
<?= @$bookingNo;?><br /><br />


<h1>Would you like to delete the reservation?</h1>
<form method='post'>
<input type='submit' value='JA' name='loeschen_ja' />
<input type='submit' value='NEIN' name='loeschen_nein' />
</form>