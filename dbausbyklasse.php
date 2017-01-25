<?php
include "config.php";
 
$sql = "SELECT klasse, fname, pnum FROM pupils ORDER BY klasse ASC, fname ASC;";
$db_erg1 = mysqli_query( $db_link, $sql );

if ( ! $db_erg1 )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg1 ))
{

  echo "<tr>";
  echo "<td>". $zeile['klasse'] . "</td>";
    
    $pnum=$zeile['pnum'];
    $sql2 = "SELECT pname, lehrer FROM projects WHERE id='$pnum';";
    $anfrage = mysqli_query($db_link, $sql2);
    $row = mysqli_fetch_array($anfrage);
    
  echo "<td>". utf8_encode($zeile['fname']) . "</td>";
  echo "<td>". utf8_encode($row['pname']) . " bei " . utf8_encode($row['lehrer']) . "</td>";
  echo "</tr>";
        
}
echo "</table>";
 

?>

<!-- pitcodec -->