  <?php
session_start();
include 'connect.php';
$conn=connect();
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="SELECT userid,password FROM auth";
$flag = 0;
  if($run_post=mysqli_query($conn,$sql))
    {
    while ($row=mysqli_fetch_row($run_post)){
                if(strcmp($userid,$row[0])==0 && strcmp($password,$row[1])==0)
              {
                echo "HELLO";
                  $_SESSION["logged_in"] = true;
                  $_SESSION["user"] = $userid;
                  echo "<script>window.location = 'http://localhost/sys/index.php'</script>";
                  $flag = 1;
                  break;
              }


            }
      }

if (!$flag){
    $message = "Login credentials are wrong";
echo "<script type='text/javascript'>alert('$message');</script>";
      echo "<script>window.location = 'http://localhost/sys/auth.php'</script>";

}
?>
