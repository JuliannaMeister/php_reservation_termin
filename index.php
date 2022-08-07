<?php 
session_start();

$link = mysqli_connect("localhost","root","","test");
mysqli_query($link, "SET names utf8");

if(isset($_GET["seite"]) && $_GET["seite"] == "logout")
{
	session_destroy();
	unset($_SESSION);
	setcookie("login_merken", "", time() -1); 
	unset($_COOKIE["login_merken"]);
}

if(isset($_POST["benutzer"]) && isset($_POST["kennwort"]))
{
	if($_POST["benutzer"] == "juli" && $_POST["kennwort"] == "meister")
	{
	
	    $_SESSION["eingeloggt"] = true;
		$_SESSION["benutzer"] = "Julianna Meister";
		$_SESSION["mitteilung"] = "<div style='color:green'>Success to Login</div>"; #massage in the header
		if(isset($_POST["merken"]))
		{
			setcookie("login_merken", "Julianna Meister", time() + 60*60*24*365);
		}
		
		header("Location: ?seite=verwaltung"); 
		exit; #php ends
	}
	else
	{
		
		$_SESSION["mitteilung"] = "<div style='color:red'>Incorrect entry</div>"; #massage in the header
	}

}

if(isset($_COOKIE["login_merken"]))
{
	# automatisch einloggen
	$_SESSION["eingeloggt"] = true;
	$_SESSION["benutzer"] = "Julianna Meister";	
}
?>

<html>
<head>
	<title>Dinner Booking</title>
	<meta charset="utf-8" />	
	<link rel="stylesheet" href="css/5-style.css" />	
	
</head>

<body>

<header>
	<a href="?seite=start">Startseite</a>
	<a href="?seite=reservation">Reservation</a>
	
	
	<?php
	if(isset($_SESSION["eingeloggt"]))
	{
		echo '<a href="?seite=verwaltung">Verwaltung</a>';
		echo '<a href="?seite=logout">Logout</a>';
		echo "Hallo ".$_SESSION["benutzer"];		
	}
	else
	{
		echo '<a href="?seite=login">Login</a>';
	}	
	?>
</header>

<main>

<?php
if(isset($_SESSION["mitteilung"]))
{
	echo $_SESSION["mitteilung"]; # Anzeigen
	unset($_SESSION["mitteilung"]); # Entfernen / Löschen
}

# wenn die Seite nicht(!) gesetzt ist
if(!isset($_GET["seite"]))
{
	$_GET["seite"] = "start"; # Startseite einstellen
}

#print_r($_GET);

# Seitenauswahl
switch($_GET["seite"])
{
	case "start":
		include("php/startseite.php"); # externe Datei einbinden
	break;
	case "reservation":
	if(isset($_POST["new_reservation_speichern"]))
	{
		include("php/new_reservation_speichern.php");	
	}	
	else {
		include("php/reservation.php");	 
		# externe Datei einbinden
	}
	break;
	
	case "login":
		include("php/login.php"); # externe Datei einbinden	
	break;
	case "logout":
		include("php/logout.php"); # externe Datei einbinden	
	break;	
	case "verwaltung":
		if(isset($_SESSION["eingeloggt"]))
		{
			include("php/verwaltung.php"); # externe Datei einbinden
		}
		else
		{
			header("Location: ?seite=login"); # Weiterleitung zum Login
			exit; # Programm verlassen / beenden
		}	
	break;	
	default:
		include("html/404.html"); # externe Datei einbinden
}

?>
</main>
<footer>
Copyright 2022
</footer>
</body>
</html>

<?php
mysqli_close($link);
?>