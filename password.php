<?php
session_start();
include 'connect.php';
$conn=connect();
$username=$_SESSION['user'];

        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($conn, "SELECT password FROM auth WHERE userid='$username'");
        if($newpassword=$confirmnewpassword)
        $sql=mysqli_query($conn,"UPDATE auth SET password='$newpassword' where
 userid='$username'");
        if($sql)
        {
        $message = "Congratulations You have successfully changed your password";
        echo "<script type='text/javascript'>alert('$message');</script>";
          echo "<script>window.location = 'http://localhost/sys/dashboard.php'</script>";

        }
       else
        {
       $message = "Passwords do not match";
       echo "<script type='text/javascript'>alert('$message');</script>";
         echo "<script>window.location = 'http://localhost/sys/dashboard.php'</script>";

       echo "<script type='text/javascript'>alert('$message');</script>";
       }
      ?>
