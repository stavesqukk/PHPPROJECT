<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'youtubeuserdatta');

var_dump($_POST); // Debug code to print out the contents of the $_POST array

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['comment'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO userinfodata (name, email, mobile, comment) VALUES ('$name','$email','$mobile','$comment')";

    mysqli_query($con,$query );

    echo "$query";
} else {
    echo "Required fields are missing";
}

?>



