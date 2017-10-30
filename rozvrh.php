<?php
  include "funkce.php";
  head();
  echo "<title>Rozvrh hodin</title>";
  menu();
  sub_xhtml();
?>
    <h1>Rozvrh hodin</h1>
    <hr /><br />
    <table align="center" width="450">
      <tr>
        <th width="50" height="25" rowspan="2"><img src="images/budik.gif" width="43" alt="budik" /></th>
        <th>1.</th>
        <th>2.</th>
        <th>3.</th>
        <th>4.</th>
      </tr>
      <tr>
        <th>8:00-8:45</th>
        <th>8:55-9:40</th>
        <th>9:50-10:35</th>
        <th>10:55-11:40</th>
      </tr>
      <tr>
        <th height="40">Po</th>
        <td>MA</td>
        <td>TV</td>
        <td>PRV</td>
        <td>ĆJ</td>
      </tr>
      <tr>
        <th height="40">Út</th>
        <td>ČJ</td>
        <td>MA</td>
        <td>PČ</td>
        <td>ČJ</td>
      </tr>
      <tr>
        <th height="40">St</th>
        <td>ČJ</td>
        <td>MA</td>
        <td>ČJ</td>
        <td>TV</td>
      </tr>
      <tr>
        <th height="40">Čt</th>
        <td>ČJ</td>
        <td>PRV</td>
        <td>VV</td>
        <td>CJ</td>
      </tr>
      <tr>
        <th height="40">Pá</th>
        <td>ČJ</td>
        <td>MA</td>
        <td>ČJ</td>
        <td>HV</td>
      </tr>
      <tr>
        <th height="25" colspan="5">Rozvrh třídy 1. A platný pro školní rok 2007 / 2008</th>
      </tr>
    </table>
<?php
  konec();
?>
