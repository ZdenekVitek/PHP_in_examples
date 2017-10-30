<?php
  include "funkce.php";
  head();
  echo "<title>Formuláře</title>";
  menu();
  sub_xhtml();
?>
    <h1>Formuláře</h1>
    <hr />
    <form action="formulare.php" method="post">
      <table class="hidden">
        <tr>
          <td class="hidden"><p>Uživatelské jméno:</p></td>
          <td class="hidden" style="text-align: left"><input type="text" name="user" class="text_pole" size="15" maxlength="30" /></td>
        </tr>
        <tr>
          <td class="hidden"><p>Heslo:</p></td>
          <td class="hidden" style="text-align: left"><input type="password" name="passw" class="text_pole" size="15" maxlength="30" /></td>
        </tr>
        <tr>
          <td class="hidden"><p>Vaše zpráva:</p></td>
          <td><textarea cols="50" rows="6" name="zprava"></textarea></td>
        </tr>
        <tr>
          <td class="hidden"><p>Souhlasím s podmínkami:</p></td>
          <td class="hidden" style="text-align: left"><input type="checkbox" name="souhlas" value="ano" /></td>
        </tr>
        <tr>
          <td class="hidden"><p>Vzdělání:</p></td>
          <td class="hidden" style="text-align: left">
            <input type="radio" name="vzdelani" value="základní" checked="checked" />základní
            <input type="radio" name="vzdelani" value="středoškolské" />středoškolské
            <input type="radio" name="vzdelani" value="vysokoškolské" />vysokoškolské
          </td>
        </tr>
        <tr>
          <td class="hidden"><p>Operační systém:</p></td>
          <td class="hidden" style="text-align: left">
            <select name="system">
              <option value="Windows">Windows</option>
              <option value="Linux">Linux</option>
              <option value="jiný">jiný</option>
            </select>
         </td>
        </tr>
      </table>
      <input type="hidden" name="stat" value="ČR" /><br />
      <input type="submit" value="odeslat formulář" />
      <input type="reset" value="vymazat formulář" />
    </form>

<?php
konec()
?>
