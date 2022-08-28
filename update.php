<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Record</title>
</head>
<body>
   <h3>Update</h3>
   <form method="post">
      <span>Enter the details to be updated:</span><br>
      <?php
         session_start();
         $id = $_SESSION['prod_id'];
         $conn = new mysqli('localhost','root','','collegedatabase');
         if ($conn -> connect_error) {
            die("Error: ".$conn -> connect_error);
         }
         $getQuery = "SELECT * FROM product_info WHERE pid = $id";
         $result = $conn -> query($getQuery);
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      ?>
      <input type="number" name="prod_id" value="<?php echo $row["pid"] ?>" placeholder="New Product ID" id=""><br>
      <input type="text" name="prod_name" value="<?php echo $row["name"] ?>" placeholder="New Product Name" id=""><br>
      <input type="number" name="prod_price" value="<?php echo $row["price"] ?>" placeholder="New Price" id=""><br>
      <input type="number" name="prod_qty" value="<?php echo $row["qty"] ?>" placeholder="New Quantity" id=""><br>
      <input type="text" placeholder="Product Company" name="prod_comp" value="<?php echo $row["mfg_comp_name"] ?>" id=""><br>
      <button type="submit" value="submit" name="submit">SUBMIT</button>
      <?php
         if(isset($_POST["submit"])) {
            $input_id = $_POST["prod_id"];
            $input_name = $_POST["prod_name"];
            $input_price = $_POST["prod_price"];
            $input_qty = $_POST["prod_qty"];
            $input_comp = $_POST["prod_comp"];

            $updateQuery = "UPDATE product_info SET pid=$input_id, name = '$input_name', price = $input_price, qty = $input_qty, mfg_comp_name = '$input_comp' WHERE pid = $id";

            if (mysqli_query($conn, $updateQuery)) {
               echo "Record updated successfully";
            } else {
               echo "Error updating record: " . mysqli_error($conn);
            }
         }
         mysqli_close($conn);
      ?>
   </form>
</body>
</html>