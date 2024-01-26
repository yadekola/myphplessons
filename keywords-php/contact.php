<?php
    session_start();
?>


<?php
    include 'header.php';
?>

<section>

    <div class="someMainContent">
        <h1>Hi there!</h1>
    </div>

</section>

<ul>
    <li><a href="indexf.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php

echo $_SESSION['username'];

?>

</body>
</html>