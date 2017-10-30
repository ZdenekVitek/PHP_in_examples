<?php
  include "funkce.php";
  head();
  echo "<title>CSS formátování textu</title>";
  menu();
  sub_xhtml();
?>
    <h1>CSS formátování textu</h1>
    <hr />
    <p style="font-family: 'Times New Roman'; font-variant: small-caps">Tento řádek je vykreslen fontem Times New Roman - kapitálky</p>
    <p style="font-family: Verdana, Arial; text-decoration: underline">Tento řádek je vykreslen fontem Verdana případně Arial</p>
    <p style="font-family: serif; color: red; word-spacing: 10px">Tento řádek je vykreslen rodinou písma serif</p>
    <p style="font-family: sans-serif; text-indent: 1cm; text-align: left">Tento řádek je vykreslen rodinou písma sans-serif</p>
    <p style="font-family: cursive; font-size: 20pt; text-transform: capitalize">Tento řádek je vykreslen rodinou písma cursive</p>
    <p style="font-family: fantasy; font-weight: bold">Tento řádek je vykreslen rodinou písma fantasy</p>
    <p style="font-family: monospace; font-style: italic; letter-spacing: -20px">Tento řádek je vykreslen rodinou písma monospace</p>
    <hr />
    <h1>Vložení <span style="color:green">řádkového</span> <span style="color: orange; text-decoration: underline">elementu</span> SPAN</h1>
<?php
  konec();
?>
