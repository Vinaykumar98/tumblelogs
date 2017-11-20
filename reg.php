<?php
session_start();
include 'connect.php';
$conn=connect();
$userid=$_POST['userid'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if(strcmp($password,$cpassword)>0 || strcmp($password,$cpassword)<0 )
{
  $message = "Passwords do not match";
echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.location = 'http://localhost/sys/register.php'</script>";

}
else{
                $queried="INSERT INTO auth(id,userid,password)VALUES(NUll,'".$userid."','".$password."')";
                $success = $conn->query($queried);
                  if (!$success) {
                    die("Couldn't enter data: ".$conn->error);
                  }
                  else{
                    $_SESSION["logged_in"] = true;
                    $_SESSION["user"] = $userid;
              echo "<script>window.location = 'http://localhost/sys/index.php'</script>";

             }
}
?>
