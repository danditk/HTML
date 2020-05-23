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

	<?php include "kupujacy.php";

	// uzytkownik();
	// echo "<br>";
	//
	// uzytkownik("Kasia","Kowalska");
	// echo "<br>";
	//
	// uzytkownik("Michał");
	// echo "<br>";

	$kupujacy = new Buyer();
	$kupujacy->imie = "Janek";
	$kupujacy->nazwisko = "Kowalewski";
	$kupujacy->test(); echo $kupujacy->imie ." ". $kupujacy->nazwisko;
	$kasia = new Buyer("Katarzyna", "Malinowska", "k", "25");
	echo "<br><br><br>";
	?>

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


	<br><br><br>
	<h3>Z wykorzystaniem pętli for</h3>
	<table border="1">
		<caption>Klienci którzy nam zaufali</caption>
		<tr>
			<th>Imie</th>
			<th>Nazwisko</th>
		</tr>
		<?php

			$klienci = array();
			for ($i=0; $i < 3; $i++) {
				$klienci[$i] = new Buyer();
			}

			$klienci[0]->imie = "Daniel";
			$klienci[0]->nazwisko = "Kondraciuk";
			$klienci[1]->imie = "Hubert";
			$klienci[1]->nazwisko = "Duklanowski";
			$klienci[2]->imie = "Andrzej";
			$klienci[2]->nazwisko = "Skorykow";

			$tajemniczyKlient = new Buyer();

			// wyświetlenie za pomocą for
			for ($i=0; $i < 3; $i++) {
				echo	"<tr>";
				echo			"<td>".$klienci[$i]->imie."</td>";
				echo			"<td>".$klienci[$i]->nazwisko."</td>";
				echo	"</tr>";
			}

			echo	"<tr>";
			echo			"<td>".$tajemniczyKlient->imie."</td>";
			echo			"<td>".$tajemniczyKlient->nazwisko."</td>";
			echo	"</tr>";

		 ?>
	</table>
	<br><br>

	<h3>Z wykorzystaniem pętli foreach</h3>
	<table border="1">
		<caption>Klienci zadowoleni z naszego serwisu</caption>
		<tr>
			<th>Imie</th>
			<th>Nazwisko</th>
		</tr>
		<?php
			// wyswietlenie za pomocą foreach
			foreach ($klienci as $klient):
		 ?>
		 <tr>
		 	<td><?= $klient->imie ?></td>
		 	<td><?= $klient->nazwisko ?></td>
		 </tr>
	 <?php endforeach; ?>
	</table>




		<br><br><br><br><br><br>
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
