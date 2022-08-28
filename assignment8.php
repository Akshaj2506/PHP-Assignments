<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Assignment-8</title>
</head>
<body>
   <form action="" method="post">
      <label for="id">Enter product ID: </label>
      <select name="id" id="">
         <?php
            $conn = new mysqli('localhost','root','','collegedatabase');

            if ($conn -> connect_error) {
               die('Connection failed '. $conn -> connect_error);
            }
            $getId = "SELECT pid FROM product_info";

            $result = $conn -> query($getId);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):
         ?>
         <option value="<?php echo $row['pid'] ?>"><?php echo $row['pid'] ?></option>
         <?php endwhile ?>
      </select><br>
      <select name="operation" id="">
         <option value="" disabled selected hidden>Select an operation</option>
         <option value="create">Create</option>
         <option value="read">Read</option>
         <option value="update">Update</option>
         <option value="delete">Delete</option>
      </select><br>
      <button type="submit" value='submit' name='submit'>SUBMIT</button><br>
      <?php
         $conn = new mysqli('localhost','root','','collegedatabase');
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            session_start();
            $_SESSION["prod_id"] = $_POST["id"];
            $id = $_POST["id"];
            $selectedOperation = $_POST['operation'];
            if ($selectedOperation == 'create') {
               header("location: create.php");
            }
            if ($selectedOperation == 'read') {
               $sqlquery = "SELECT * FROM product_info WHERE pid = $id";
               $res = $conn -> query($sqlquery);
               $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
               echo "<br>ID: ".$row['pid']."<br>";
               echo "Name: ".$row['name']."<br>";
               echo "Price: ".$row['price']."<br>";
               echo "Quantity: ".$row['qty']."<br>";
               echo "Manufacturing company: ".$row['mfg_comp_name']."<br>";
            }
            if ($selectedOperation == 'update') {
               header("Location: update.php");
               exit();
            }
            if ($selectedOperation == 'delete') {
               $deleteQuery = "DELETE FROM product_info WHERE pid = $id";
               if($conn -> query($deleteQuery) == TRUE) {
                  echo "Record deleted successfully";
               } else {
                  echo "Error: " . $deleteQuery. "<br>" . $conn->error;
               }
            }
         }
      ?>
   </form>
</body>
</html>