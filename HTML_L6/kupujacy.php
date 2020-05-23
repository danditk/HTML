<?php

function uzytkownik($imie = "nieznajomy",$nazwisko = ""){
  $uzytkownikname = $imie." ".$nazwisko;

  echo "Witaj użytkowniku " . $uzytkownikname. ".<br><br>";
}


/**
 * Nauka tworzenia klasy dla profilu kupującego samochód
 */
class Buyer
{
  public $imie;
  public $nazwisko;
  function test(){
    echo "Witaj użytkowniku ";
  }
  function __construct(){
    $this->imie = "Pozostaje";
    $this->nazwisko = "Tajemnicą";
  }

}

/**
 * Klasa z danymi predefiniowanymi w tablicy
 */
// class Buyerd extends Buyer
// {

  // function __construct($dane)
  // {
  // 	$dane = array(
  // 		'imie' => "nieznany",
  // 		'nazwisko' => "nieznane",
  // 		'plec' => 0,
  // 		'wiek' => 18);
//   }
// }




?>
