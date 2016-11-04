<html>
  <head>
    <title> Popcorn Sales - for PHP handling </title>
  </head>
  <body>

    <form action = "popcorn_proc.php" method = "post">
      <h2> World of Popcorn </h2>
      <table>
        <!-- Text widgets for the customer’s name and address -->
        <tr>
          <td> Buyers Name: </td>
          <td> <input type = "text" name = "name" size = "30" /></td>
        </tr>
        <tr>
          <td> Street Address: </td>
          <td> <input type = "text" name = "street" size = "30" /></td>
	        </tr>
	        <tr>
	          <td> City, State, Zip: </td>
	          <td> <input type = "text" name = "city" size = "30" /></td>
	        </tr>
	      </table>

	      <p>
	      <table border = "border">
	        <!-- First, the column headings -->
	        <tr>
	          <th> Product </th>
	          <th> Price </th>
	          <th> Quantity </th>
	        </tr>
          <!-- Now, the table data entries -->
          <?php
            //Read the file and create the line in the form
            $fh = fopen("popcorn_data.txt", "r");
            $lineNb = (int)(fgets($fh));
            echo $lineNb;
            for($i = 0; $i < $lineNb; $i++){
              print("<tr>");
              $productName = (fgets($fh));
              print("<td>".$productName."</td>");
              $productPrice = (int)(fgets($fh));
              printf("<td>$ %4.2f</td>", $productPrice);
              print("<td align = \"center\"><input type = \"text\" name = \"product".$i."\" size = \"3\" /></td>");
              print("</tr>");
            }
            fclose($fh);
          ?>
      </table>
      </p>

<!-- The radio buttons for the payment method -->

      <h3> Payment Method </h3>
      <p>
        <input type = "radio" name = "payment" value = "visa"
              checked = "checked" />
          Visa <br />
        <input type = "radio" name = "payment" value = "mc" />
          Master Card <br />
        <input type = "radio" name = "payment"
               value = "discover" />
          Discover <br />
        <input type = "radio" name = "payment" value = "check" />
          Check <br /> <br />

<!-- The submit and reset buttons -->

        <input type = "submit" value = "Submit Order" />
        <input type = "reset" value = "Clear Form" />
      </p>
    </form>
  </body>
</html>
