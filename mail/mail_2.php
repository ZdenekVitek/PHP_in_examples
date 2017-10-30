<?php
  include "../funkce.php";
  head();
  echo "<title>kontaktní formulář</title>";
  menu();
  sub_php();
?>
    <h1>Kontaktní formulář</h1>
    <hr />
<?php
  //zadání vstupních hodnot
  $mail_addr=$HTTP_POST_VARS[mail_addr];
  $zprava=$HTTP_POST_VARS[zprava];
  $address="rdlouhy@centrum.cz";
  $subject="Zpráva z formuláře";
  $message = "
    <style type='text/css'>
      .text   {
        text-align: left;
        Color: #000066;
	      font-family: verdana, sans-serif;
        font-size: 12px;
        font-weight: bold;
        text-decoration: none;
        }
      .text_c   {
        text-align: left;
        Color: #BC0000;
        font-family: verdana, sans-serif;
        font-size: 12px;
        font-weight: bold;
        text-decoration: none;
        }
    </style>

    <p class='text'>Dotaz z formuláře</p>
    <table>
      <tr>
        <td width='120'><p class='text'>Odesílatel:</p></td>
        <td><p class='text_c'>$mail_addr</p></td>
      </tr>
      <tr>
        <td width='120'><p class='text'>Zpráva:</p></td>
        <td><p class='text_c'>$zprava</p></td>
      </tr>
    </table>";

  $headers="MIME-Version: 1.0\n";
  $headers.="Content-type: text/html; charset=utf-8\n";
  $headers.="From: <$mail_addr>\n";
  
  mail($address,$subject,$message,$headers);

  echo "<p class='nadpis'>Vaše zpráva byla odeslána</p>";


  konec();
?>
