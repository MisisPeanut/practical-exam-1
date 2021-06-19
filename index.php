
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Practical Exam 1</title>
</head>
<body class="white" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<h1 class = "center">PHP</h1><br>
<h3>Create a folder named Exam_01 with an index.php file under it. Work on that file by creating a
function that checks if an input string is a palindrome. A palindrome is a word, phrase, or
sequence that reads the same backward as forward, e.g., madam or nurses run.</h3>
<input class = "text" name = "texta">
<?php
if(isset($_POST['texta'])){
$string = $_GET['texta'];
function check_palindrome($string){
  if ($string == strrev($string)){
      echo "its palindrome"; 
  }else{
      echo "its not palindrome";
  }
}
}
?>


</body>
</html>
