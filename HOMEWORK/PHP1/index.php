<?php

$arrayList = array("\"Obuoliai\"", "\"Bananai\"", "\"Kriaušės\"", "\"Apelsinai\"", "\"Mandarinai\"");
$title = "Vaisių sąrašas";

printlist($arrayList, $title);


function printList ($arrayList, $title) {
  echo "<h1>".$title."</h1>";
  echo "<ul>";
  for ($i=0; $i < sizeof($arrayList); $i++) {
    echo "<li>".$arrayList[$i]."</li>";
  }
  echo "</ul>";
}
 ?>
