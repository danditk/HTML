<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tytył</title>
	<meta name="autor" content="lesserr" />
	<meta name="description" content="Opis witryny" />
	<meta name="keywords" content="słowa kluczowe" />
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<header>
		<h1>Wybierz konfiguurację samochodu</h1>
	</header>

	<main>
		<article class="">
			<form class="" action="index.html" method="post" enctype="application/x-www-form-urlencoded">
				<fieldset class="lista">
					<legend>Rodzaj nadwozia</legend>
					<ul>
						<li><label><input type="radio" name="nadwozie" value="1" checked> Hatchback</label></li>
						<li><label><input type="radio" name="nadwozie" value="2"> Kabriolet</label></li>
						<li><label><input type="radio" name="nadwozie" value="3"> Kombi</label></li>
					</ul>
				</fieldset>

				<label class="select" for="silnik">Rodzaj silnika</label>
				<select class="lista" name="silnik">
					<option value="w">wysokoprężny</option>
					<option value="b" selected>benzynowy</option>
					<option value="e">elektryczny</option>
					<option value="h">hybrydowy</option>
				</select>

			</form>

		</article>
	</main>


	<?php

	function uzytkownik($imie = "nieznajomy",$nazwisko = "",$plec = "",$wiek = ""){
		$uzytkownikname = $imie." ".$nazwisko;

		echo "Witaj użytkowniku " . $uzytkownikname. ".<br><br>";
	}

	uzytkownik("Katarzyna", "Malinowska");
	uzytkownik();

	// class osoba(imie){
	// 	$imie;
	// 	function_constructt(){
	// 		$this->imie = "nieznajomy";
	// 	}
	// }
	//
	// $name = "Elżbieta";
	//
	// echo "Witaj ".$name. "!";

	?>


		Copyright (c) 2018 Copyright Holder All Rights Reserved.
</body>

</html>

<!-- <?php
//
//
// 	$paczek = $_POST['paczek'];
// 	$grzebien = $_POST['grzebien'];
// 	$sum = $paczek*0.99+$grzebien*1.29;
//
// 	echo<<<END
// 		<h2>Podsumowanie zamówienia</h2>
// 		<table border="1" cellpadding="10" cellspacing="0">
// 			<tr>
// 				<td>Pączek (0.99 PLN/szt)</td><td>$paczek</td>
// 			<tr>
// 			<tr>
// 				<td>Grzebień (1.29 PLN/szt)</td><td>$grzebien</td>
// 			<tr>
// 			<tr>
// 				<td>SUMA</td><td>$sum PLN</td>
// 			<tr>
// 		</table>
//
// 		<br>
// 		<a href="index.php">Powrót do zamówienia</a>
//
// END;
//

?> -->
