<?php
  include "../funkce.php";
  head();
  echo "<title>Novinky e-mailem</title>";
  menu();
  sub_php();
?>
    <h1>Novinky e-mailem</h1>
    <hr />
    <form method="post" action="novinky/mail.php">
			<table style="height:80px">
			   <tr>
					<td width="100">Váš e-mail:</td>
					<td>
            <input type="text" value ="@" name="mail_nov" size="40" class="text_pole" />
          </td>
				</tr>
				<tr>
					<td></td>
					<td width="300">
            <input type="submit" value="de / aktivovat" /><br />
					</td>
				</tr>
			</table>
    </form>
    <p class="text_c">Pro aktivaci i deaktivaci služby zadejte e-mailovou adresu.</p>

<?php
  konec();
?>
