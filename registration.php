<?php
  $name3 = $_POST["name3"];
  echo "Try ".$name3;

  $fh = fopen("signup.txt", "a");
  fwrite($fh, 3."\n");
  fwrite($fh, $name3."\n");
  fclose($fh);
?>
<h1>Thank you for registering</h1>
