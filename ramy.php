<?php
  include "funkce.php";
  head();
  echo "<title>Orámování objektů</title>";
  menu();
  sub_xhtml();
?>
    <h1>Orámování objektů</h1>
    <hr />
    <p style="border-style: solid;">Tento odstavec je orámován stylem "solid"</p>
    <p style="border-style: dotted;">Tento odstavec je orámován stylem "dotted"</p>
    <p style="border-style: dashed;">Tento odstavec je orámován stylem "dashed"</p>
    <p style="border-style: double;">Tento odstavec je orámován stylem "double"</p>
    <p style="border-style: groove;">Tento odstavec je orámován stylem "groove"</p>
    <p style="border-style: ridge;">Tento odstavec je orámován stylem "ridge"</p>
    <p style="border-style: inset;">Tento odstavec je orámován stylem "inset"</p>
    <p style="border-style: outset;">Tento odstavec je orámován stylem "outset"</p>
    <p style="border-style: none;">Tento odstavec je orámován stylem "none"</p>
    <img style="border-style: solid; border-top-color: red; border-right-color: blue; border-bottom-color: green; border-left-color: yellow" src="images/logo.gif" alt="logo firmy" />
<?php
  konec();
?>
