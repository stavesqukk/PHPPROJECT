<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'continue');

var_dump($_POST); // Debug code to print out the contents of the $_POST array

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['rating']) && !empty($_POST['comment'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO userinfo (name, email, rating, comment) VALUES ('$name','$email','$rating','$comment')";

    mysqli_query($con,$query );

    echo "$query";
} else {
    echo "Required fields are missing";
}

?>