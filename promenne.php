<?php
  include "funkce.php";
  head();
  echo "<title>Proměnné</title>";
  menu();
  sub_php();
?>
    <h1>Proměnné</h1>
    <hr />
<?php
  //zadání vstupních hodnot
  $cislo1=12;
  $cislo2=4;
  //provedení výpočtů s proměnnými
  $soucet=$cislo1+$cislo2;
  $rozdil=$cislo1-$cislo2;
  $soucin=$cislo1*$cislo2;
  $podil=$cislo1/$cislo2;
  $zbytek=$cislo1%$cislo2;
  //zobrazení výsledků
  echo "<p class='nadpis'>Byly zadány následující vstupní hodnoty: ".$cislo1." a ".$cislo2."</p>";
?>
  <table>
    <tr>
      <th width="150">Popis operace</th>
      <th width="150">Příklad</th>
      <th width="150">Výsledek</th>
    </tr>
    <tr>
      <td>součet čísel</td>
      <td><?php echo $cislo1." + ".$cislo2; ?></td>
      <td><?php echo $soucet; ?></td>
    </tr>
    <tr>
      <td>rozdíl čísel</td>
      <td><?php echo $cislo1." - ".$cislo2; ?></td>
      <td><?php echo $rozdil; ?></td>
    </tr>
    <tr>
      <td>součin čísel</td>
      <td><?php echo $cislo1." * ".$cislo2; ?></td>
      <td><?php echo $soucin; ?></td>
    </tr>
    <tr>
      <td>podíl čísel</td>
      <td><?php echo $cislo1." / ".$cislo2; ?></td>
      <td><?php echo $podil; ?></td>
    </tr>
    <tr>
      <td>zbytek po dělení</td>
      <td><?php echo $cislo1." % ".$cislo2; ?></td>
      <td><?php echo $zbytek; ?></td>
    </tr>
  </table>

<?php
  konec();
?>
