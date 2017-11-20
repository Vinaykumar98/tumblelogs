<html>
<head>
<title>Daily Blogs</title>

<link rel='stylesheet' href='style.css' />

</head>
<body>
  <?php include 'connect.php';
  ?>
  <h1>Tumblelogs</h1>
    <h3>Our Everyday bit Blogger</h3>
  <?php include 'title_bar.php'; ?>
  <div class='box'>
  <h2>Create a Post</h2>
  <form method="post" >
    <?php

          $conn = Connect();
    if(isset($_POST['message']) && !empty($_POST['message'])){
      $message = $conn->real_escape_string($_POST['message']);
      $domain=$_POST['domain'];
        $user=$_SESSION["user"];
      $query="INSERT INTO post (id,post,qdate,qtime,domain,userid) VALUES( NULL,'".$message."',NOW(),NOW(),$domain,'".$user."')";
      $success = $conn->query($query);
      if (!$success) {
          die("Couldn't enter data: ".$conn->error);
      }
      }
    ?>
    <textarea id="in"  name='message' placeholder="what's on your mind?" width="100" height="100" <?php echo $post_id ?> ></textarea><br/>
    <input type='submit' value='Post' id="post" />
    <select id="select" name="domain">
<option value="1">Art</option>
<option value="2">Business</option>
<option value="3">Dating</option>
<option value="4">Cinema</option>
<option value="5">Food</option>
<option value="6">Discussion</option>
<option value="7">Health</option>
<option value="8">Fashion</option>
<option value="9">Travel</option>
<option value="10">Motivation</option>
</select>
  </form></div>
  <script src='jquery.js' ></script>
  <script src ='index.js'></script>
</body>
</html>
