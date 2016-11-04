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
      echo $productid;
      $productName = (fgets($fh));

      $productPrice = (int)(fgets($fh));

      $productItem = $_POST[$productid];
      if ($productItem == "") $productItem = 0;?>
      <tr align = "center">
        <td> <?php print ("$productName"); ?> </td>
        <td> <?php printf ("$ %4.2f", $productPrice); ?> </td>
        <td> <?php print ("$productItem"); ?> </td>
        <td> <?php printf ("$ %4.2f", (int)$productPrice*(int)$productItem); ?>
        </td>
      </tr>
      <?php
    }
    fclose($fh);

    // Get form data values
    //TODO: Replace with array of items. From Form or from File?
    $unpop = $_POST["unpop"];
    $caramel = $_POST["caramel"];
    $caramelnut = $_POST["caramelnut"];
    $toffeynut = $_POST["toffeynut"];

    //TODO: See previous. If any of the quantities are blank, set them to zero
    if ($unpop == "") $unpop = 0;
    if ($caramel == "") $caramel = 0;
    if ($caramelnut == "") $caramelnut = 0;
    if ($toffeynut == "") $toffeynut = 0;



    //TODO: See previous. Compute the item costs and total cost
    $unpop_cost = 3.0 * $unpop;
    $caramel_cost = 3.5 * $caramel;
    $caramelnut_cost = 4.5 * $caramelnut;
    $toffeynut_cost = 5.0 * $toffeynut;
    $total_price = $unpop_cost + $caramel_cost +
                   $caramelnut_cost + $toffeynut_cost;
    $total_items = $unpop + $caramel + $caramelnut + $toffeynut;
  ?>
    <tr align = "center">
      <td> Unpopped Popcorn </td>
      <td> $3.00 </td>
      <td> <?php print ("$unpop"); ?> </td>
      <td> <?php printf ("$ %4.2f", $unpop_cost); ?>
      </td>
    </tr>
    <tr align = "center">
      <td> Caramel Popcorn </td>
      <td> $3.50 </td>
      <td> <?php print ("$caramel"); ?> </td>
      <td> <?php printf ("$ %4.2f", $caramel_cost); ?>
      </td>
      </tr>
    <tr align = "center">
      <td> Caramel Nut Popcorn </td>
      <td> $4.50 </td>
      <td> <?php print ("$caramelnut"); ?> </td>
      <td> <?php printf ("$ %4.2f", $caramelnut_cost); ?>
      </td>
    </tr>
    <tr align = "center">
      <td> Toffey Nut Popcorn </td>
      <td> $5.00 </td>
      <td> <?php print ("$toffeynut"); ?> </td>
      <td> <?php printf ("$ %4.2f", $toffeynut_cost); ?>
      </td>
    </tr>
  </table>
  <p /> <p />

  <?php
    print ("You ordered $total_items popcorn items <br />");
    printf ("Your total bill is: $ %5.2f <br />", $total_price);
    print ("Your chosen method of payment is: $payment <br />");
  ?>
</body>
</html>
_a
