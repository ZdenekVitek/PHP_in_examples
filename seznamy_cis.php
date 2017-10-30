<?php
  include "funkce.php";
  head();
  echo "<title>Číslované seznamy</title>";
  menu();
  sub_xhtml();
?>
    <h1>Číslované seznamy</h1>
    <hr />
    <table class="hidden">
      <tr>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ol style="list-style-type: decimal">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ol>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ol style="list-style-type: lower-alpha">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ol>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ol style="list-style-type: upper-alpha">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ol>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ol style="list-style-type: lower-roman">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ol>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ol style="list-style-type: upper-roman">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ol>
        </td>
      </tr>
    </table>
    <p class="nadpis">Víceúrovňový číslovaný seznam</p>
    <p class="text_left">Seznam nákupu:</p>
    <ol>
      <li>Potraviny:
        <ol style="list-style-type: lower-alpha">
          <li>mléko</li>
          <li>máslo</li>
          <li>salám</li>
        </ol>
      </li>
      <li>Drogérie:
        <ol style="list-style-type: lower-alpha">
          <li>zubní pasta</li>
          <li>hřeben</li>
        </ol>
      </li>
      <li>Ostatní:
        <ol style="list-style-type: lower-alpha">
          <li>mrazák</li>
        </ol>
      </li>
    </ol>
<?php
  konec();
?>
