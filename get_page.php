<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      a {
         padding: 10 20px;
         margin: 50px 10px;
         background: red;
         color: white;
         text-decoration: none;
         position: relative;
      }
   </style>
</head>
<body>
   
   <?php
   $conn = new mysqli('localhost','root','','collegedatabase');

   if ($conn -> connect_error) {
      die('Connection failed '. $conn -> connect_error);
   }
   //Display Table
   $sqlquery = "SELECT * FROM product_info";
   $res = $conn -> query($sqlquery);
   echo "<table border = 1>";
   while ($row = $res -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['pid']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['price']."</td>";
      echo "<td>".$row['qty']."</td>";
      echo "<td>".$row['mfg_comp_name']."</td>";
      echo "</tr>" ;
   }
   echo "</table>";

   //Query
   $sql_search = "select * from product_info";
   $result_counter = 0;
   $res_search = $conn -> query($sql_search);
   while ($row = $res_search -> fetch_assoc()) {
      $result_counter += 1;
   }
   echo "\nNumber of Results= ".$result_counter;
   //Pagination Links
   $num_result_per_page = 2;
   $num_pages = ceil($result_counter / $num_result_per_page);
   echo "<br>";
   for ($i = 0; $i < $num_pages; $i++) {
      echo "<button>".($i+1)."</button>";
   }
   ?>
</body>
</html>