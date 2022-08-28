<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DOC</title>
</head>
<body>
   <form method="POST">
      <label for="id">ID:<input type="number" name="id" id="" max="999" min="100"></label><br>
      <label for="name">Name:<input type="text" name="name" id=""></label><br>
      <label for="age">Age:<input type="number" name="age" id="" max="200" min="0"></label><br>
      <label for="subject">Subject:<input type="text" name="subject" id=""></label><br>
      <button type="submit">SUBMIT</button>
   </form>
   <?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "collegedatabase";
      $id = $_POST['id'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      $subject = $_POST['subject'];

      $connection = new mysqli($server , $username, $password, $database);
      if ($connection -> connect_error) {
         echo("Connection error: ". $connection-> connect_error);
      }
      $sql = "INSERT INTO sswt VALUES($id,'$name',$age,'$subject')";
      if ($connection -> query($sql) === TRUE) {
         echo "New record created successfully";
      } else {
         echo "Error: ".$sql."<br>".$connection -> error;
      }

      $connection-> close();
   ?>
</body>
</html>