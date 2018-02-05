<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <table>
      <?php
      for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
          for ($j = 0; $j < 8; $j++) {
              if ($i % 2 == 0) {
                if ($j == 0 ) {
                    echo "<td class=\"white\"> </td>";
                    continue;
                }
                if ($j % 2 == 0) {
                    echo "<td class=\"white\"> </td>";
                }
                else {
                    echo "<td class=\"black\"> </td>";
                }
              }
              elseif ($i % 2 != 0) {
                if ($j == 0) {
                    echo "<td class=\"black\"> </td>";
                    continue;
                }
                if ($j % 2 == 0) {
                    echo "<td class=\"black\"> </td>";
                }
                else {
                    echo "<td class=\"white\"> </td>";
                }
              }
            }
        echo "</tr>";
      }
       ?>
    </table>
  </body>
</html>
