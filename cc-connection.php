<?php

    $dbhost = "crutchco_portfolio_contact";
    $user = "crutchco";
    $password = "XimenO9080#";
    $db = "crutchco_portfolio_contact";

    $connection = mysqli_connect('localhost:3306', $user, $password, $db);

/* $connection = mysqli_connect("127.0.0.1", "root", "P@ssw0rd", "3306"); */

/*  ANOTHER WAY TO WRITE or die();
    if (mysqli_connect_errorno()) {
        die("Unable to establish a connection to database");
    }
*/

echo "Thanks for getting in contact! I'll get back to you as soon as possible."

?>