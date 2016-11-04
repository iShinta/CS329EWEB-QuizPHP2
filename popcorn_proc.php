<html>
<head>
  <title> Process the popcorn3.html form </title>
</head>
<body>
  <?php
    //General variables
    $nbItems = 0;
    $totalBill = 0;

    //Customer's information
    $name = $_POST["name"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $payment = $_POST["payment"];

    ?>
    <h4> Customer: </h4>
    <?php
      print ("$name <br /> $street <br /> $city <br />");
    ?>
    <p /> <p />
    <table border = "border">
        <caption> Order Information </caption>
        <tr>
          <th> Product </th>
          <th> Unit Price </th>
          <th> Quantity Ordered </th>
          <th> Item Cost </th>
        </tr>
    <?php

    //Read the file and process the data for each product
    $fh = fopen("popcorn_data.txt", "r");
    $lineNb = (int)(fgets($fh));
    for($i = 0; $i < $lineNb; $i++){
      $productid = "product".$i;
      $productName = (fgets($fh));
      $productPrice = (float)(fgets($fh));
      $productItem = $_POST[$productid];

      $nbItems += $productItem;
      $totalProduct = (float)$productPrice*(float)$productItem;
      $totalBill += $totalProduct;

      if ($productItem == "") $productItem = 0;?>
      <tr align = "center">
        <td> <?php print ("$productName"); ?> </td>
        <td> <?php printf ("$ %4.2f", $productPrice); ?> </td>
        <td> <?php print ("$productItem"); ?> </td>
        <td> <?php printf ("$ %4.2f", $totalProduct); ?>
        </td>
      </tr>
      <?php
    }
    fclose($fh);
  ?>
  </table>
  <p /> <p />

  <?php
    print ("You ordered $totalProduct popcorn items <br />");
    printf ("Your total bill is: $ %5.2f <br />", $totalBill);
    print ("Your chosen method of payment is: $payment <br />");
  ?>
</body>
</html>
