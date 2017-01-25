

<?php
include "config.php";
 
$sql = "SELECT pnum, fname, klasse FROM pupils ORDER BY pnum ASC, fname ASC;";
$db_erg = mysqli_query( $db_link, $sql );

if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg ))
{
  echo "<tr>";
  echo "<td>". $zeile['pnum'] . "</td>";
  echo "<td>". utf8_encode($zeile['fname']) . "</td>";
  echo "<td>". $zeile['klasse'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );
?>

<!-- pitcodec -->