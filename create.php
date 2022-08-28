<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Operation using PHP</title>
</head>
<body>
   <form method="post">
      <span>Enter the details below</span><br>
      <input type="number" placeholder="Product ID" name="id" id=""><br>
      <input type="text" placeholder="Product Name" name="prod_name" id=""><br>
      <input type="number" placeholder="Price" name="prod_price" id=""><br>
      <input type="number" placeholder="Quantity" name="prod_qty" id=""><br>
      <input type="text" placeholder="Manufacturing company" name="prod_manu_comp" id=""><br>
      <button type="submit" value="submit" name="submit">SUBMIT</button>
   </form>
   <?php
      $connection = new mysqli('localhost','root','','collegedatabase');
      if ($connection -> connect_error) {
         die("Connection error ".$connection -> connect_error);
      }
      if (isset($_POST['submit'])) {
         $id = $_POST['id'];
         $name = $_POST['prod_name'];
         $price = $_POST['prod_price'];
         $quantity = $_POST['prod_qty'];
         $comp = $_POST['prod_manu_comp'];
         $insertQuery = "INSERT INTO product_info VALUES($id,'$name',$price,$quantity,'$comp')";
         if($connection -> query($insertQuery) == TRUE) {
            echo "Record added successfully";
         } else {
            echo "Error: " . $insertQuery . "<br>" . $connection->error;
         }
      }
   ?>
</body>
</html>