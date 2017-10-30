<?php
  session_start();
  include "../funkce.php";
  head();
  echo "<title>Kostka</title>";
  menu();
  sub_php();
  
  if (!session_is_registered("st_1")){ 
    session_register("st_1");$_SESSION['st_1'] = 0;
    session_register("st_2");$_SESSION['st_2'] = 0;
    session_register("st_3");$_SESSION['st_3'] = 0;
    session_register("st_4");$_SESSION['st_4'] = 0;
    session_register("st_5");$_SESSION['st_5'] = 0;
    session_register("st_6");$_SESSION['st_6'] = 0;
  }
  
  $st_1=$_SESSION['st_1'];
  $st_2=$_SESSION['st_2'];
  $st_3=$_SESSION['st_3'];
  $st_4=$_SESSION['st_4'];
  $st_5=$_SESSION['st_5'];
  $st_6=$_SESSION['st_6'];
?>
    <h1>Kostka</h1>
    <hr /><br />
<?php
  $cislo=rand(1,6);
  switch($cislo){
    case 1: echo "<img src='kostka/k_1.gif' alt='1' />";$st_1++;break;
    case 2: echo "<img src='kostka/k_2.gif' alt='2' />";$st_2++;break;
    case 3: echo "<img src='kostka/k_3.gif' alt='3' />";$st_3++;break;
    case 4: echo "<img src='kostka/k_4.gif' alt='4' />";$st_4++;break;
    case 5: echo "<img src='kostka/k_5.gif' alt='5' />";$st_5++;break;
    case 6: echo "<img src='kostka/k_6.gif' alt='6' />";$st_6++;break;
  }
  $_SESSION['st_1'] = $st_1;
  $_SESSION['st_2'] = $st_2;
  $_SESSION['st_3'] = $st_3;
  $_SESSION['st_4'] = $st_4;
  $_SESSION['st_5'] = $st_5;
  $_SESSION['st_6'] = $st_6;
?>

<p class="nadpis">Statistika</p>

<table>
	<tr>
		<th width="140"> Číslo </th>
		<th width="65"> 1 </th>
		<th width="65"> 2 </th>
		<th width="65"> 3 </th>
		<th width="65"> 4 </th>
		<th width="65"> 5 </th>
		<th width="65"> 6 </th>
	</tr>
	<tr>
		<td> Počet opakování </td>
		<td><?php echo $st_1 ?></td>
		<td><?php echo $st_2 ?></td>
		<td><?php echo $st_3 ?></td>
		<td><?php echo $st_4 ?></td>
		<td><?php echo $st_5 ?></td>
		<td><?php echo $st_6 ?></td>
	</tr>
</table>

<form action="kostka/kostka.php" method="post">
  <input type="submit" value="házej znovu" />
</form>

<?php
  konec();
?>
