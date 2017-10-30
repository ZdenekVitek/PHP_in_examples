<?php
  include "funkce.php";
  head();
  echo "<title>Datum a čas</title>";
  menu();
  sub_php();
?>
  <h1>Datum a čas</h1><hr />
  <?php
    echo "<p class='nadpis'>Od půlnoci 1. ledna 1970 uplynulo právě ".time()." sekund</p>";
    switch (Date("w")) {
    case 0 : $den="v neděli "; break;
    case 1 : $den="v pondělí "; break;
    case 2 : $den="v úterý "; break;
    case 3 : $den="v středu "; break;
    case 4 : $den="v čtvrtek "; break;
    case 5 : $den="v pátek "; break;
    case 6 : $den="v sobotu "; break;
    }
    switch (Date("n")) {
    case 1 : $mesic=" ledna "; break;
    case 2 : $mesic=" února "; break;
    case 3 : $mesic=" března "; break;
    case 4 : $mesic=" dubna "; break;
    case 5 : $mesic=" května "; break;
    case 6 : $mesic=" června "; break;
    case 7 : $mesic=" července "; break;
    case 8 : $mesic=" srpna "; break;
    case 9 : $mesic=" září "; break;
    case 10 : $mesic=" října "; break;
    case 11 : $mesic=" listopadu "; break;
    case 12 : $mesic=" prosince "; break;
    }
    $datum=$den.date("d.").$mesic.date("Y \v H:i:s");
    echo "<p class='nadpis'>Tato stránka byla načtena <br /><span style='color:blue'>".$datum." hodin.</span></p>";

    $minut=Date("G")*60+Date("i");
      if ($minut<570) $pozdrav="Dobré ráno";
      elseif ($minut<690) $pozdrav="Dobré dopoledne";
      elseif ($minut<750) $pozdrav="Příjemné poledne";
      elseif ($minut<1050) $pozdrav="Hezké odpoledne";
      elseif ($minut>1050) $pozdrav="Dobrý večer";
    echo "<hr /><p class='nadpis'><span style='color:green'>".$pozdrav."</span></p>";
?>    
    <object width="125" height="125" type="application/x-shockwave-flash">
      <param name="movie" value="http://www.site-clocks.com/flash/clocks/analog.swf?hex=770000" />
      <param name="wmode" value="transparent" />
    </object>
    
<?php
konec();
?>

