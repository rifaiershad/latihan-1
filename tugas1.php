<html>
<form  method="get">
 <h3>
  <br>Luas Segitiga<br>
  <table border=1>
   <tr><td>Alas<td><input type="number "name="alas"></td></tr>
    <tr><td>Tinggi<td><input type="number" name="tinggi"></td></tr>
    </table>
    <input type="submit" value="SEND"> 
   </form>
<?php
   $alas=$_GET['alas'];
   $tinggi=$_GET['tinggi'];
   $luas=0.5 * $alas * $tinggi;
   echo "<tr><td>Luas<td> = $luas</td></td></tr><br>";
?>

<html>
<form  method="get">
 <h4>
  <br>Luas Jajar Genjang<br>
  <table border=1>
   <tr><td>Alas<td><input type="number "name="alas"></td></tr>
   <tr><td>Tinggi<td><input type="number" name="tinggi"></td></tr>
    </table>
    <input type="submit" value="SEND"> 
   </form>
<?php
   $alas=$_GET['alas'];
   $tinggi=$_GET['tinggi'];
   $luas=$alas * $tinggi;
   echo "<tr><td>Luas<td> = $luas</td></td></tr><br>";
?>

<html>
<form  method="get">
 <h4>
  <br>Luas Lingkaran<br>
  <table border=1>
   <tr><td>Jari-Jari<td><input type="number "name="jari2"></td></tr>
    </table>
    <input type="submit" value="SEND"> 
   </form>
<?php
   $jari2=$_GET['jari2'];
   $luas=22/7 * $jari2 * $jari2;
   echo "<tr><td>Luas<td> = $luas</td></td></tr><br>";
?>




