<?php
  include "funkce.php";
  head();
  echo "<title>Seznamy s odrážkami</title>";
  menu();
  sub_xhtml();
?>
    <h1>Seznamy s odrážkami</h1>
    <hr />
    <table class="hidden">
      <tr>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ul style="list-style-type: none">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ul>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ul style="list-style-type: disc">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ul>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ul style="list-style-type: circle">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ul>
        </td>
        <td class="hidden">
          <p class="text_left">Seznam nákupu:</p>
          <ul style="list-style-type: square">
            <li>mléko</li>
            <li>máslo</li>
            <li>salám</li>
            <li>zubní pasta</li>
            <li>hřeben</li>
            <li>mrazák</li>
          </ul>
        </td>
      </tr>
    </table>
    <p class="nadpis">Víceúrovňový seznam s odrážkami</p>
    <p class="text_left">Seznam nákupu:</p>
    <ul>
      <li>Potraviny:
        <ul>
          <li>mléko</li>
          <li>máslo</li>
          <li>salám</li>
        </ul>
      </li>
      <li>Drogérie:
        <ul>
          <li>zubní pasta</li>
          <li>hřeben</li>
        </ul>
      </li>
      <li>Ostatní:
        <ul>
          <li>mrazák</li>
        </ul>
      </li>
    </ul>
<?php
  konec();
?>
