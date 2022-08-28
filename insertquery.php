<?php
   $exp_name = $_POST['name'];
   $exp_amt = $_POST['amount'];
   $exp_category = $_POST['category'];

   $connection = new mysqli('localhost','root','','Users');

   if ($connection -> connect_error) {
      die('Connection error: '.$connection->connect_error);
   }

   $insertQuery = "INSERT INTO yashica VALUES('$exp_name',$exp_amt,'$exp_category');";

   if ($connection->query($insertQuery) == TRUE) {
      echo "New record successfully created";
   } else {
      echo ("ERROR: ".$insertQuery."<br>".$connection->error);
   }
   $connection -> close();
?>