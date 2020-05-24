
<?php
$szukaj = $_POST['fraza'];

$rodzajNadwozia = $_POST['nadwozie'];
$rodzajSilnika = $_POST['silnik'];
$wyposazenie = $_POST['wyposazenie'];
$zapach = $_POST['choinka'];

$imie = $_POST['imie'];
$haslo = $_POST['haslo'];
$email = $_POST['email'];
$email = $_POST['numer'];

$dataDostawy = $_POST['data_dostawy'];
foreach ($wyposazenie as $opcja):
  {
    echo $opcja."<br>";
  }
endforeach;
?>
