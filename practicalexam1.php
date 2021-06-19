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
<h3>1. Loop</h3> 
<st>A. Create a PHP function using WHILE loop that will sum all even numbers from 0-10.
<?php
$num1 = 0;
$num2 = 0;
while($num2<=10){
    if($num2 % 2 == 0){
        $num1+=$num2;

    }
    $num2++;
}
echo '<br> Answer: ';
echo $num1;
?>

<br>
B. Create a PHP function using DO WHILE loop that will display all odd numbers from 0-10.
<?php
$num1 = 0;
$num2 = 0;
do{
    if($num2 % 2 == 1){
        $num1+=$num2;
    }   
    $num2++;
}
while($num2<=10);

echo '<br> Answer: ';
echo $num1;
?>

<br>
C. Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence.
<?php
function fibonacci($num1, $num2 = 0, $num3 = 1)
{
    $fib = [$num2,$num3];
    for($i=1;$i<$num1;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
echo "<pre>";
print_r(fibonacci(10));
?>

<h3>2. Array</h3> 
A. Display the value that have the most number occurrence; in case of tie arrange it in
alphabetical order.
<b>[‘Marvin’, ‘Marco’, ‘Marvin’, ‘Marco’, ‘Marco’, ‘Marvin’, ‘Christian’]</b>
<?php
$array = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");

$count=array_count_values($array);
arsort($count);
$keys=array_keys($count);
echo "Answer: ";
echo $keys[0];
?>
B. Sort the array in ascending order; if the value is an odd number, round it up to nearest tens.
<b>[9863, 7127, 2020, 80, 131, 55, 100]</b>
<?php

?>

C. Display the item that is not repetitive.
<b>[‘red’, ’blue’, ‘black’, ’red’, ‘blue’, blue, ‘red’, ‘gold’]</b>
<?php
$array = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
echo "<pre>";
print_r(array_unique($array));
echo "Answer: ";
echo $array[2]. " and ". $array[7];
?>

<br>
<h3>3. SQL</h3> 
<st>A. Get all data of highest paid employee <b>(without using LIMIT).</b>
Answer: SELECT MAX(salary) as MAX from tblsalary;
B. Get all employees that are hired from 2017-2018.
Answer: SELECT * FROM tblemployees WHERE date_hired = '2018';
C. Get all employees that belongs to IT department AND hired 2018 onwards.
Answer: SELECT departments.department,  employees.date_hired FROM tbldepartments INNERJOIN tblemployees WHERE date_hired >= '2018'; 

<br>
<h3>4. JAVASCRIPT</h3> 
<st>A. Fix the sentence. <b>(Capitalize the first word only and add spaces per word). </b>
<i>Note: Assume that the string is a variable.</i>
<p>TheQuickBrownFoxJumpsOverTheLazyDog.
ANswer: (sorry ma'am/sir i just started learning js this week)
<script>
const mySentence = "TheQuickBrownFoxJumpsOverTheLazyDog.";
const words = mySentence.split(" ");

for (let i = 0; i < words.length; i++) {
    words[i] = words[i][0].toLowerCase() + words[i].substr(1);
}

words.join(" ");
}
</script>


<st>B. Create a function that will parse and display the JSON values on a <b>Contact FORM.
(text field, radio button, checkbox) </b>
<i>Note: Get only the first record order by lastName ASCENDING.</i>
ANswer: (sorry ma'am/sir i just started learning js this week)


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>