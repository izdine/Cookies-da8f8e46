
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
      <form method="post">

        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <input type="text" id="keuze "placeholder="Keuze" name=Keuze>
        <input type="submit" name="button" value="Submit"></input>
    </form>

      <?php
      session_start();
  $cookie1 = "Skateboard";
  $cookie2 = "Basketbal";
  $cookie3 = "Skeelers";
  setcookie("COOKIE" , $_POST["Keuze"]);
  if (isset($_POST["Keuze"])) {
    setcookie("COOKIE", $_POST["Keuze"], time()+3600);
    echo "<h1> Gekozen item: " . $_POST["Keuze"] . "</h1>";

}


elseif (isset($_COOKIE["Keuze"])) {
  echo "<h1> Gekozen item: " . $_COOKIE["COOKIE"] . "</h1>";
}
       ?>
    </body>
</html>
