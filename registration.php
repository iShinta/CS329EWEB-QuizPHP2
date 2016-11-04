<?php
  $n1 = "";
  $n2 = "";
  $n3 = "";
  $n4 = "";
  $n5 = "";
  $n6 = "";
  $n7 = "";
  $n8 = "";
  $n9 = "";

  if(isset($_POST["name1"])){
    $n1 = $_POST["name1"];
  }
  if(isset($_POST["name2"])){
    $n2 = $_POST["name2"];
  }
  if(isset($_POST["name3"])){
    $n3 = $_POST["name3"];
  }
  if(isset($_POST["name4"])){
    $n4 = $_POST["name4"];
  }
  if(isset($_POST["name5"])){
    $n5 = $_POST["name5"];
  }
  if(isset($_POST["name6"])){
    $n6 = $_POST["name6"];
  }
  if(isset($_POST["name7"])){
    $n7 = $_POST["name7"];
  }
  if(isset($_POST["name8"])){
    $n8 = $_POST["name8"];
  }
  if(isset($_POST["name9"])){
    $n9 = $_POST["name9"];
  }

  $fh = fopen("signup.txt", "a");
  if($n1 != ""){
    fwrite($fh, "1\n");
    fwrite($fh, $n1."\n");
  }
  if($n2 != ""){
    fwrite($fh, "2\n");
    fwrite($fh, $n2."\n");
  }
  if($n3 != ""){
    fwrite($fh, "3\n");
    fwrite($fh, $n3."\n");
  }
  if($n4 != ""){
    fwrite($fh, "4\n");
    fwrite($fh, $n4."\n");
  }
  if($n5 != ""){
    fwrite($fh, "5\n");
    fwrite($fh, $n5."\n");
  }
  if($n6 != ""){
    fwrite($fh, "6\n");
    fwrite($fh, $n6."\n");
  }
  if($n7 != ""){
    fwrite($fh, "7\n");
    fwrite($fh, $n7."\n");
  }
  if($n8 != ""){
    fwrite($fh, "8\n");
    fwrite($fh, $n8."\n");
  }
  if($n9 != ""){
    fwrite($fh, "9\n");
    fwrite($fh, $n9."\n");
  }
  fclose($fh);
?>
<h1>Thank you for registering</h1>
<a href="index.php">Back to the Registration Form</a>
