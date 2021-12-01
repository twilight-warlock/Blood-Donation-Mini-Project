<?php

$db = mysqli_connect('localhost','root','','donor')

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db, "DELETE FROM donors WHERE id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("Location: http://localhost/WP/Blood-Donation-Mini-Project/members.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>