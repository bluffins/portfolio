<?php

require_once('cc-connection.php');

session_start();

// $user_id = $_SESSION['user_id'];
if (isset($_POST['submit'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

    
/*
$mailTo = "jlujanjr@gmail.com";
$headers = "From: ".$email;
$txt = "You have recieved an email from ".$first_name.".\n\n".$comments;


mail($mailTo, $email, $txt, $headers);
header("Location: index.html?mailsend");
*/
    
}
// DATABASE SEARCH QUERY
/*
$search_query = "SELECT first_name, last_name, email FROM contact

WHERE first_name LIKE '%first_name%'
AND last_name LIKE '%last_name%'; " ;

$search_results = mysqli_query($cc-connection.php, $search_query);

$search_count = mysqli_num_rows($search_results);
if ($search_count > 0) {
$row = mysqli_fetch_assoc($search_results);

echo "Search results: ";

} else { 
    echo "No results were found :(";
}

*/

//INSERT INTO DATABASE
function insertSql {
$mysql = "INSERT INTO contact_fixed (first_name, last_name, email, comments)
VALUES ('%first_name%', '%last_name%', '%email%', '%comments%')";
}
insertSql();


?>