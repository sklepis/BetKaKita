<?php

// Domintų komentaras apie kodo skaitomumą.
// Ar toks stilius priimtinas (atitraukimai, naujos eilutės)? Ačiū.

printTranslatedDate();

function printTranslatedDate() {

  echo "<h2>Šiandien yra ".date("Y")." m. ".translatedMonth()." ".date("j")." d., ".translatedWeekDay()."</h2>";
}

function translatedMonth() {

$monthNumber = date("n");

switch ($monthNumber) {

  case 1:
    $monthName = "sausio";
    break;
  case 2;
    $monthName = "vasario";
    break;
  case 3:
    $monthName = "kovo";
    break;
  case 4:
    $monthName = "balandzio";
    break;
  case 5:
    $monthName = "geguzes";
    break;
  case 6:
    $monthName = "birzelio";
    break;
  case 7:
    $monthName = "liepos";
    break;
  case 8:
    $monthName = "rugpjucio";
    break;
  case 9:
    $monthName = "rugsejo";
      break;
  case 10:
    $monthName = "spalio";
    break;
  case 11:
    $monthName = "lapkricio";
    break;
  case 12:
    $monthName = "gruodzio";
    break;
  }
  return $monthName;
}

function translatedWeekDay() {

  $weekDayNo = 7;//date("N");

  switch ($weekDayNo) {

    case 1:
      $weekDay = "pirmadienis";
      break;
    case 2:
      $weekDay = "antradienis";
      break;
    case 3:
      $weekDay = "treciadienis";
      break;
    case 4:
      $weekDay = "ketvirtadienis";
      break;
    case 5:
      $weekDay = "penktadienis";
      break;
    case 6:
      $weekDay = "sestadienis";
      break;
    case 7:
      $weekDay = "sekmadienis";
      break;
  }
  return $weekDay;
}

 ?>
