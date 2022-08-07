
<?php
if(isset($_POST["suchbutton"]))
{
	$_SESSION["suche"] = $_POST["suche"];
}
# <?= bedeutet <?php echo
?>
<form method='post'>
Suche: <input type='text' name='suche' value='<?= @$_SESSION["suche"]; ?>' />
<input type='submit' name='suchbutton' value='Suchen' />
</form>