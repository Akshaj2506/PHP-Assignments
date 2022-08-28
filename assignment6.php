<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Assignment-6</title>
</head>
<body>
   <h3>Assignment 6</h3>
   <form method="POST">
      <label for="file-name">Enter file name (with file extension): </label><br><input type="text" name="file-name" id=""><br><br>
      <label for="operation">Which operation do you want to perform?</label><br>
      <label for="operation"><input type="radio" name="operation" id="" value="r">Read</label><br>
      <label for="operation"><input type="radio" name="operation" id="" value="w">Write</label><br>
      <button type="submit">Submit</button>
   </form>
   <?php
      $fileName = $_POST['file-name'];
      $text = "\nAppending text in $fileName";
      $file = fopen($fileName, 'a+');
      if ( $_POST['operation'] == 'w') {
         fwrite($file , $text);
         echo "Content written";
      }
      if ( $_POST['operation'] == 'r') {
         $fileSize = filesize($fileName);
         $printFileData = fread($file, $fileSize);
         echo "$printFileData";
      }
   ?>
   <form method="POST">
      <label for="search-file">Enter the file name with the extension:</label><br>
      <input type="text" name="search-file" id=""><br>
      <label for="search-string">Enter the name to be searched: </label><br>
      <input type="text" name="search-string" id=""><br>
      <button type="submit">Submit</button>
   </form>
   <?php
      $searchFile = $_POST['search-file'];
      $searchString = $_POST['search-string'];
      $lines = file($searchFile);
      foreach ($lines as $name) {
         if (strpos($name, $searchString) !== FALSE) {
            echo "$name";
         }
      }
   ?>
</body>
</html>