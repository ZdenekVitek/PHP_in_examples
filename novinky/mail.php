<?php
  include "../funkce.php";
  head();
  echo "<title>Novinky e-mailem</title>";
  menu();
  sub_php();
?>
    <h1>Novinky e-mailem</h1>
    <hr />
<?php
  $mail_nov=$HTTP_POST_VARS[mail_nov];
  $subject="novinky e-mailem";
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
    </style>

    <p class='text'>Aktivace služby \"novinky e-mailem\" serveru xhtml-php.php5.cz</p>
    <p class='text'>Službu aktivujete / deaktivujete klepnutím na následující odkaz:</p>
    <p class='text'><a href='http://www.xhtml-php.wz.cz/novinky/aktivace.php?mail_nov=$mail_nov'>http://www.xhtml-php.wz.cz/novinky/aktivace.php?mail_nov=$mail_nov</a></p>";


  $headers="MIME-Version: 1.0\n";
  $headers.="Content-type: text/html; charset=utf-8\n";
  $headers.="From: <info@xhtml-php.php5.cz>\n";
  
  mail($mail_nov,$subject,$message,$headers);

  echo "<p class='nadpis'>byl odeslán autorizační e-mail</p>";


  konec();
?>
