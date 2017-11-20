<?php
include 'connect.php';
$conn=connect();
$post_id=$_POST['post_id'];
$post_comment=$_POST['comment'];
$queried="INSERT INTO comment(id,post_id,comment)VALUES(NULL,'".$post_id."','".$post_comment."')";
$success = $conn->query($queried);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
 ?>
