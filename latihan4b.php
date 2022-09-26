<!DOCTYPE html>
<html>
<body>

<?php
$country = array (
  array("indonesia","singapura","malaysia","brunei","thailand"),
);
    
for ($row = 0; $row < 1; $row++) {
  echo "<p><b>negara asean awal</b></p>";
  echo "<ul>";
  for ($col = 0; $col <5; $col++) {
    echo "<li>".$country[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<?php
$country = array (
  array("indonesia","singapura","malaysia","brunei","thailand","laos","filipina","myanmar"),
);

for ($row = 0; $row < 1; $row++) {
  echo "<p><b>negara asean baru</b></p>";
  echo "<ul>";
  for ($col = 0; $col <8; $col++) {
    echo "<li>".$country[$row][$col]."</li>";
  }
  echo "</ul>";
}

?>

</body>
</html>