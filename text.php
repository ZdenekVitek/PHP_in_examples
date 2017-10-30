<?php
  include "funkce.php";
  head();
  echo "<title>Členění dokumentu</title>";
  menu();
  sub_xhtml();
?>
    <h1>Toto je nadpis úrovně 1</h1>
    <h2>Toto je nadpis úrovně 2</h2>
    <h3>Toto je nadpis úrovně 3</h3>
    <h4>Toto je nadpis úrovně 4</h4>
    <h5>Toto je nadpis úrovně 5</h5>
    <h6>Toto je nadpis úrovně 6</h6>
    <hr />
    <p>Stejně jako v knize i na webové stránce je text členěn do odstavců. <br />Značky pro zalomení odstavce a zalomení řádku patří k nejčastěji používaným značkám. Veškerý text umístněný v těle dokumentu by měl být ohraničen značkami pro zalomení odstavce.</p>
    <p>Prohlížeč při zalamování řádků v odstavci zcela ignoruje konce řádků použité při tvorbě kódu. <br />Všechny řádky jsou zalomeny podle velikosti okna, tedy nový řádek odstavce začíná ve chvíli, kdy se další slovo s ohledem na šířku okna na předchozí řádek již nevejde. Chcete-li v rámci odstavce psát text na nový řádek, musíte vložit značku pro zalomení řádku </p>
    <hr />
    <p><b>H<sub>2</sub>SO<sub>4 </sub></b>je vzorec <u>kyseliny sírové</u>, nikoliv <s>siřičité</s>.</p>
<?php
  konec();
?>
