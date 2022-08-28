<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Assignment 5</title>
   <style>
      textarea {
         resize: none;
         margin-bottom: 20px;
      }
      .replace-string {
         margin-left: 10px;
      }
      #button-submit {
         margin-top: 20px;
         padding: 10px 20px;
      }
   </style>
</head>
<body>
   <h2>Assignment-5</h2>
   <form method="post" action="ReplaceString.php">
      <h3>Question 1</h3>
      <label for="input-textarea">Enter text below:</label><br>
      <textarea name="input-textarea" id="" cols="30" placeholder="Enter some text" rows="10"></textarea><br>
      <label for="target-string">Enter the word to be replaced:</label><input class="replace-string" type="text" name="target-string" id=""><br>
      <label for="replace-string">Enter the word to be replaced with:</label><input class="replace-string" type="text" name="replace-string" id=""><br>
      <button type="submit" id="button-submit">SUBMIT</button>
   </form>
   <form action="ReplaceString.php" method="post">
      <h3>Question 2</h3>
      <label for="input-textarea-1">Enter text below:</label><br>
      <textarea name="input-textarea-1" id="" cols="30" placeholder="Enter some text" rows="10"></textarea><br>
      <button type="submit" id="button-submit">SUBMIT</button>
   </form>
</body>
</html>