<!-- <?php
    //session_start();
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<!-- create table post (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
); -->


<!-- insert into posts (subject, content, data) VALUES ('This is the subject', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2015-11-14 16:38:01'); -->
    
<?php

    //$a = 100;

     function newCalc($a) {
        $newnr = $a * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }

    $a = 100;      
    newCalc($a);

    echo "<br>";

    $x = 100;      
    newCalc($x);
?>

<?php

    // $x = 500;

    // function something() {
    //     $y = 10;
    // }
    
    // echo "<br>$x";


  //Different Superglobals in PHP
    // $GLOBALS
    // $_POST
    // $_GET
    // $_COOKIE
    // $_SESSION
    // Superglobals in php GLOBALS
    $x = 500;
    //$y = 10;

    //something();

    function something() {
        $y = 10;
        echo $GLOBALS["x"];
    }

    something();

    // Superglobals in php $_GET

    echo $GET['name'];

    // Superglobals in php $_POST

    echo $_POST['name'];

    // Superglobals in php $_COOKIE

    setcookie("name", "Daniel", time() + 86400);
    //how to dis

    setcookie("name", "Daniel", time() - 1);

    // Superglobals in php $_SESSION

        $_SESSION['NAME'] = "12";
?>

<!-- // Superglobals in php $_GET -->
<form method="GET">
    <input type="text" name="name" value="Daniel">
    <button type="submit">PRESS ME</button>
</form>

<!-- // Superglobals in php $_POST -->
<form method="POST">
    <input type="text" name="name" value="Daniel Larry">
    <button type="submit">PRESS ME</button>
</form>

<ul>
    <li><a href="indexf.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php

// $_SESSION['username'] = "dani948a";
// echo $_SESSION['username'];

if (!isSet($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
    echo "You are logged in!";
}

?>

</body>
</html>
    


