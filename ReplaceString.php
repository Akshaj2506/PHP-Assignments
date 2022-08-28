<?php
   $text = $_POST["input-textarea"];
   $targetString = $_POST['target-string'];
   $replaceString = $_POST["replace-string"];
   $countString = $_POST["input-textarea-1"];
   echo str_replace($targetString, $replaceString, $text);
   echo "a => ".substr_count($countString,'a')."<br>";
   echo "e => ".substr_count($countString,'e')."<br>";
   echo "i => ".substr_count($countString,'i')."<br>";
   echo "o => ".substr_count($countString,'o')."<br>";
   echo "u => ".substr_count($countString,'u')."<br>";
?>