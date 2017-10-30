<?php
  include "../funkce.php";
  head();
  echo "<title>Násobilka</title>";
  menu();
  sub_php();
?>
    <h1>Násobilka</h1>
    <hr />
    <form method="post" action="nasobilka/nasob_2.php">
    <table width="200">
      <tr>
        <td style="padding-bottom:20px; padding-top:20px">
			   Zadejte číslo:
			   <input type="text" name="nasob" size="6" class="text_pole" /><br /><br />
			   <input type="submit" value="zobrazit násobky" />
			  </td>
      </tr>
    </table>
    </form>


<?php
  konec();
?>
