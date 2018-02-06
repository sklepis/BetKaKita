<?php
    if (isset($_POST["name"])) {
        setcookie("name", $_POST["name"], time() + 300);
    }
    if (isset($_POST["surename"])) {
        setcookie("surename", $_POST["surename"], time() + 300);
    }
    if (isset($_POST["height"])) {
        setcookie("height", $_POST["height"], time() + 300);
    }
    if (isset($_POST["weight"])) {
        setcookie("weight", $_POST["weight"], time() + 300);
    }

  header("Location: index.php");
  exit();
 ?>
