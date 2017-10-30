<?php
  include "../funkce.php";
  head();
  echo "<title>kontaktní formulář</title>";
  menu();
  sub_php();
?>
    <h1>Kontaktní formulář</h1>
    <hr />
    <form method="post" action="mail/mail_2.php">
			<table>
				<tr>
					<td width="120">Vaše zpráva:</td>
					<td>
            <textarea name="zprava" rows="1" cols="20" style="width: 350px; height: 80px;"></textarea>
          </td>
				</tr>
				<tr>
					<td>Váš e-mail:</td>
					<td>
            <input type="text" value ="@" name="mail_addr" size="20" class="text_pole" style="width: 350px;" />
          </td>
				</tr>
				<tr>
					<td></td>
					<td>
            <input type="submit" value="odeslat zprávu" />
					</td>
				</tr>
			</table>
    </form>


<?php
  konec();
?>
