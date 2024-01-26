<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    echo "Hello ";
    print "Dekola ";
    echo "10+5 ";
    print 10+5;
    echo " 200-100 ";
    print " =";
    echo 200-100;

     //VARIABLES


     $name = " Daniel Larry ";
    //echo $name;
     echo $name." is a handsome fellow!";
?>

<form action="" method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
</form>

<?php
    $name = $_GET['person'];
    echo $name." is a handsome fellow!";
?>
    <!-- FUNCTONS -->
<?php
    //This the types of Function
    echo strlen("Hi Daniel Larry");
    //String length is a tag that calclater the items one by one this strlen is 15
    echo str_word_count(" Hi Daniel Larry ");
    //str_word_count is a tag that calclater the items of word
    echo strrev(" Hi Daniel Larry ");
    //strrev is a tag that bering eche word form the back
    echo str_replace("Daniel","Jason","Hi Daniel Larry ");
?>
  <!-- Different Data Types in PHP -->
  <?php
    //String
    $name = "<br>Coding is fun";
    echo $name;

    //Integer
    $name =20;
    echo 20;

    //Float
    $name = 20.5784;
    echo "<br>$name";

    //Boolean
    //true = 1
    //false = 0

    //Array
    $name = array("Daniel","Dennis","Michael","Larry");
    echo $name["3"]

    //<!-- Arithmetic Operators -->

    //echo 5;
    // echo 5+10;
    // echo 20-7;
    // echo 25/5;
    // echo 10*4;
    // echo 29%5;
    // echo 5**5;
    // echo 5**2;

    //Assignment Operators

    // $x = 100;
    // echo $x;

    // $a = 500;
    // $a = $a + 50;

    // echo $X;
    // $z = 150;
    // $z /= 10;

    //Comparison Operators
    //This two == is going to checking for if the two variables is the samathings
    // $y = 5;
    // $Y = 10;

    // if ($y == $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }

    //This is how to check two variables if the two variable is =equs with the sama variable
    // $y = 5;
    // $Y = 5;

    //The two == mean that the two are the same if is trus is going to be trus if is false is will be false "My ans here is True"
    // if ($y == $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }


    // $y = 5;
    // $Y = 10;

    //if $y is now <!=> = to $Y
    //<!=> or <=!>
    // "!="if $y is greater then the $Y
    // "=!"if $Y is greater then the $y
    // if ($y =! $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }

    // $z = 10;
    // $Z = 15;

    //The three === is still asking if the first variable is still the same with the second variables "My ans here is False"
    // if ($y === $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }
    

  
    // $z = 10;
    // $Z = 15;

    //The three === is still asking if the first variable is still the same with the second variables "My ans here is False"

    // if the number of the viriable is the same with the sconed variable "My ans is going to be True "
    // if ($y === $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }

    // $z = 10;
    // $Z = "10";
    
   //But what if i have a string in a variable a string  Variables is different to the first variable because a string is going to print out with three === is going to check for the datetypes an a string " So my ans here in going to be false"


    // if ($y === $Y) {
    //     echo "True!";
    // }
    // else  {
    //     echo "False!";
    // }


    //Increment   /Decrement Operators****
    // $x = 10;
    // echo $x;
    // echo ++$x;c:\Users\ITEL-PC\OneDrive\Desktop\web_devep\web_dev_jan\week-8\day-1


    // $y = 10;
    // echo --$y;
    // echo $y;


    //Logical Operators

    // $x = 10;
    // $y = 20;

    // if ($x == $y) {
    //     echo "True";
    // }
 
    //This not to give us anythinks because the first variable is less then thee second variable 

        // 'OR' is still as a preline "||"  "xor"
        // 'and' is still as a sign "&&"


    // $x = 10;
    // $y = 20;

    // if ($x == $y or 1 == 1) {
    //     echo "True";
    // }


    // $x = 10;
    // $y = 20;

    // if ($x == $y || 1 == 1) {
    //     echo "True";
    // }


    //Various Conditional Statement in PHP

    // $x = 2;
    
    // if ($x == 1) {
    //     echo "Daniel is very handsome";
    // }
    // else if ($x == 2) {
    //     echo "Daniel is kinda handsome";
    // }else{
    //     echo "Daniel is very ugly";
    // } 

    // //Switch Statement in PHP

    // $x = 5;

    // switch ($x) {
    //     case 1:
    //         echo "The answer is 1";
    //     break;
    //     case "number":
    //         echo "The answer is number";
    //     break;
        
    //     default:
    //         echo "There is no answer";
    // }


    //Loop
      //While Loop
      //Do while loop
      //For loop
      //Foreach loop

    //while loop
    // $x = 1;
    // while ($x < 5) {
    //     echo "Hi there<br>";
    //     $x++;
    // }

    // $x = 1;
    // while ($x <= 5) {
    //     echo "Hello World<br>";
    //     $x++;
    // }

    // //Do while loop

    // $x = 1;
    // do {
    //     echo "Hello World<br>";
    //     $x++; 
    // }
    // while ($x <= 5) 

    //For loop

    //for ($y = 0; $y <= 10; $y++) {
        //cho "Hi Dekola";
   //}

    //Foreach loop

    // $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    // foreach ($array as $loopdata) {
    //     echo "My name is ".$loopdata."<br>";
    // }

    //Using Arrays in PHP to Store Data
               //    0           1       2       3       4
    //$array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    //$data1 = "Daniel";
    //$data2 = "Jane";
    //$data3 = "Jacob";
    //$data4 = "John";

    //echo $array[2];

    //Function

    

    function newCalc($a) {
        $newnr = $a * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }

    $a = 100;       
    newCalc($a);

?>
</body>
</html>