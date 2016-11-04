<!DOCTYPE html>

<html>
  <head>
    <title>Sign-Up Sheet</title>
    <meta name="author" content="mh47723 and mh47727" >
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <?php
      $listSignUp = array(
        1 => "Arnold",
        2 => "Olga",
        3 => "",
        4 => "",
        5 => "",
        6 => "Arthur",
        7 => "",
        8 => "",
        9 => ""
      );

      //Read the file and put the results in the array
      $fh = fopen("signup.txt", "r");
      while(!feof($fh)){
        //Read line
        $lineNb = fgets($fh);
        echo $lineNb;

        //Read Name
        $line = fgets($fh);
        $listSignUp[$lineNb] = $line;
        echo $line;
      }
      fclose($fh);


      function getName($i){
        global $listSignUp;

        if($listSignUp[$i]){
          return $listSignUp[$i];
        }else{
          return "<input type=\"text\" name=\"name".$i."\" />";
        }

      }
    ?>
    <div id="content">
      <h1>Registration Form</h1>
      <form method="post" action="registration.php">
        <table border="2" width="50%" align="center">
          <tr>
            <th>Time</th><th>Name</th>
          </tr>
          <tr>
            <td>8:00 am </td><td><?php echo(getName(1)); ?></td>
          </tr>
          <tr>
            <td>10:00 am </td><td><?php echo(getName(2)); ?></td>
          </tr>
          <tr>
            <td>11:00 am </td><td><?php echo(getName(3)); ?></td>
          </tr>
          <tr>
            <td>12:00 pm </td><td><?php echo(getName(4)); ?></td>
          </tr>
          <tr>
            <td>1:00 pm </td><td><?php echo(getName(5)); ?></td>
          </tr>
          <tr>
            <td>2:00 pm </td><td><?php echo(getName(6)); ?></td>
          </tr>
          <tr>
            <td>3:00 pm </td><td><?php echo(getName(7)); ?></td>
          </tr>
          <tr>
            <td>4:00 pm </td><td><?php echo(getName(8)); ?></td>
          </tr>
          <tr>
            <td>5:00 pm </td><td><?php echo(getName(9)); ?></td>
          </tr>
        </table>
        <input type="submit" name="submit" value="Register" />
      </form>
    </div>
  </body>
</html>
