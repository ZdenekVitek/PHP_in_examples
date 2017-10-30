<?php
  include "funkce.php";
  head();
  echo "<title>Příkazy cyklu</title>";
  menu();
  sub_php();
?>
    <h1>Příkazy cyklu</h1>
    <hr />
<?php
    for($pocet=1;$pocet<=6;$pocet++) {
    echo "<h$pocet>Toto je nadpis úrovně $pocet </h$pocet>";
    }
?>

<?php
  konec();
?>
