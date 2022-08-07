<h1>Admin page for data management</h1>
<?php
if(isset($_GET["unterseite"]))
{
	switch($_GET["unterseite"])
	{
		
		case "bearbeiten" :                include("bearbeiten.php"); break; 
		case "loeschen" :                  include("loeschen.php"); break; 
	}
}
else
{
	include("verwaltungsuebersicht.php");
}







 