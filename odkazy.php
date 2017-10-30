<?php
  include "funkce.php";
  head();
  echo "<title>Hypertextové odkazy</title>";
  menu();
  sub_xhtml();
?>
    <h1>Hypertextové odkazy</h1>
    <hr /><br />
    <table align="center" class="hidden">
      <tr>
        <td class="hidden" width="250"><a target="_blank" href="http://www.seznam.cz"><img src="images/seznam.gif" height="50" alt="seznam.cz" /></a></td>
        <td class="hidden" width="250"><a target="_blank" href="http://www.centrum.cz"><img src="images/centrum.gif" height="50" alt="centrum.cz" /></a></td>
        <td class="hidden" width="250"><a target="_blank" href="http://www.google.cz"><img src="images/google.gif" height="50" alt="google.cz" /></a></td>
      </tr>
      <tr>
        <td class="hidden" width="250"><a target="_blank" href="http://www.seznam.cz">seznam.cz</a></td>
        <td class="hidden" width="250"><a target="_blank" href="http://www.centrum.cz">centrum.cz</a></td>
        <td class="hidden" width="250"><a target="_blank" href="http://www.google.cz">google.cz</a></td>
      </tr>
    </table>
<?php
  konec();
?>
