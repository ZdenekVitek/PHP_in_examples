<?php

function db_connect(){
  global $link;
  $dbhost="localhost";
  $dbusr="czxhtml-php";
  $dbpassw="passw_xhtml-php";
  $dbname="czxhtml-php";
  @$link=mysql_pconnect($dbhost,$dbusr,$dbpassw) or die("<p class='nadpis'>Server nepřipojen !!!</p>");
  @$db=mysql_select_db($dbname,$link) or die("<p class='nadpis'>Databáze nebyla nalezena !!!</p>");
}

function head(){
  ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <base href="http://www.xhtml-php.php5.cz/" />
    <link rel="stylesheet" href="styly.css" type ="text/css" />
  <?php
}

function menu() {
  ?>
  </head>
  <body>
    <img src="images/logo.gif" title="logo firmy" alt="logo" />
    <p></p>
    <table width="100%" class="hidden">
      <tr>
        <td width="58" style="background-image:url(images/menu_levy.gif)" class="hidden"></td>
        <td style="background-image:url(images/menu_stred.gif); padding:0" class="hidden">
          <a class="menu" href="index.php">úvod</a>&#160;&#160;
          <a class="menu" href="xhtml.php">XHTML</a>&#160;&#160;
          <a class="menu" href="php.php">PHP</a>&#160;&#160;
        </td>
        <td width="58" style="background-image:url(images/menu_pravy.gif)" class="hidden"></td>
      </tr>
    </table>
  <?php
}

function sub_xhtml() {
  ?>
      <div class="submenu">
      <p class="text_c" style="text-decoration: underline">Výuka XHTML</p>
      <a class="sub" href="text.php">formátování textu</a><br />
      <a class="sub" href="obrazky.php">vkládání obrázků</a><br />
      <a class="sub" href="ramy.php">orámování</a><br />
      <a class="sub" href="rozvrh.php">tabulky</a><br />
      <a class="sub" href="odkazy.php">odkazy</a><br />
      <a class="sub" href="text_css.php">CSS formátování textu</a><br />
      <a class="sub" href="seznamy_odr.php">seznamy s odrážkami</a><br />
      <a class="sub" href="seznamy_cis.php">číslované seznamy</a><br />
      <a class="sub" href="formulare.php">formuláře</a><br />
      <p>
      <a target="_blank" href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" border="0" /></a>
      </p>
    </div>
    <div class="hlavni">
  <?php
}

function sub_php() {
  ?>
      <div class="submenu">
      <p class="text_c" style="text-decoration: underline">Výuka PHP</p>
      <a class="sub" href="datum.php">datum a čas</a><br />
      <a class="sub" href="promenne.php">proměnné</a><br />
      <a class="sub" href="kalkul_1.php">kalkulačka</a><br />
      <a class="sub" href="mail/mail_1.php">kontaktní formulář</a><br />
      <a class="sub" href="text_cykl.php">příkazy cyklu</a><br />
      <a class="sub" href="nasobilka/nasob_1.php">násobilka</a><br />
      <a class="sub" href="kostka/kostka.php">kostka</a><br />
      <a class="sub" href="novinky/novinky.php">novinky e-mailem</a><br />
      <a class="sub" href="tajne.php">heslovaný přístup</a><br />
      <p>
      <a target="_blank" href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" border="0" /></a>
      </p>
    </div>
    <div class="hlavni">
  <?php
}

function konec() {
  ?>
    </div>
  </body>
</html>
  <?php
}

?>
