<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <form class="" action="submit.php" method="post">
      <table>
        <tr>
          <td> Vardas </td>
          <td><input type="text" name="name"
              <?php
                  if (isset($_COOKIE["name"])) {
                      echo "value= \"".$_COOKIE["name"]."\"";
                  }
              ?>
                    class="input"> </td>
        </tr>
        <tr>
          <td> Pavardė </td>
          <td><input type="text" name="surename"
              <?php
                  if (isset($_COOKIE["surename"])) {
                      echo "value= \"".$_COOKIE["surename"]."\"";
                  }
              ?>
               class="input"> </td>
        </tr>
        <tr>
          <td> Ūgis </td>
          <td><input type="number" name="height"
              <?php
                  if (isset($_COOKIE["height"])) {
                      echo "value= \"".$_COOKIE["height"]."\"";
                  }
              ?>
              class="input"> </td>
        </tr>
        <tr>
          <td> Svoris </td>
          <td><input type="number" name="weight"
              <?php
                  if (isset($_COOKIE["weight"])) {
                      echo "value= \"".$_COOKIE["weight"]."\"";
                  }
              ?>
              class="input"> </td>
        </tr>
        <tr>
          <td colspan="2"> <input type="submit" name="" value="Siųsti" id="submit"> </td>
        </tr>
      </table>
    </form>
  </body>
</html>
