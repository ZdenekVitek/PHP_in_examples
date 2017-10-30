<?php
  include "funkce.php";
  head();
  echo "<title>Kalkulačka</title>";
  menu();
  sub_php();
?>
    <h1>Kalkulačka</h1>
    <hr />
    <form action="kalkul_2.php" method="post">
      <table>
        <tr>
          <td width="120" class="hidden">zadejte 1. číslo:</td>
          <td width="100"><input type="text" name="cislo1" class="text_pole" size="6" /></td>
        </tr>
        <tr>
          <td width="120">zadejte 2. číslo:</td>
          <td width="100"><input type="text" name="cislo2" class="text_pole" size="6" /></td>
        </tr>
        <tr>
          <td width="120"></td>
          <td width="100"><input type="submit" value="zpracovat" /></td>
        </tr>
      </table>
    </form>

<?php
  konec();
?>
