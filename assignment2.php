<!DOCTYPE html>
<html>
<head>
   <title>Form Link with PHP</title>
</head>
<body>
   <h2>Assignment-2</h2>
   <form method="post">
      <input type="text" name="input-num" id=""><br>
      <button name="int">Integer</button>
      <button name="bin">Binary</button>
      <button name="oct">OctaDec</button>
      <button name="hex">HexaDec</button>
   </form>
   <?php
      if(array_key_exists('int', $_POST)) {
         buttonInt($_POST['input-num']);
      }
      else if(array_key_exists('bin',$_POST)) {
         buttonBin($_POST['input-num']);
      }
      else if(array_key_exists('oct',$_POST)) {
         buttonOct($_POST['input-num']);
      }
      else if(array_key_exists('hex',$_POST)) {
         buttonHexa($_POST['input-num']);
      }
      function buttonInt($num) {
         $res = floor($num);
         echo "Integer: $res";
      }
      function buttonBin($num) {
         $res = decbin($num);
         echo "Binary: $res";
      }
      function buttonOct($num) {
         $res = decoct($num);
         echo "Octal: $res";
      }
      function buttonHexa($num) {
         $res = dechex($num);
         echo "Hexadecimal: $res";
      }
   ?>
   </head>
</body>
</html>