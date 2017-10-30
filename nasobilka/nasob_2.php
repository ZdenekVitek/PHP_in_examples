<?php
  include "../funkce.php";
  head();
  echo "<title>Násobilka</title>";
  menu();
  sub_php();
?>
    <h1>Násobilka</h1>
    <hr /><br />
<?php
  //zadání vstupních hodnot
  $nasob=$_POST[nasob];
  echo "<table>";
  echo "<tr><th colspan='5'>Násobky čísla $nasob</th></tr>";
  for($i=1;$i<=10;$i++) {
    echo "<tr>";
      for($des=0;$des<50;$des=$des+10) {
        echo "<td width='120'><p>".($i+$des)." . $nasob = <span class='text_c'>".($i+$des)*$nasob."</span></p></td>";
      }
    echo "</tr>";
  }
  echo "</table>";
  konec();
?>
