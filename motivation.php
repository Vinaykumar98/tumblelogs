<html>
<head>
<title>Daily Blogs</title>
<link rel='stylesheet' href='style.css' />
</head>
<body id="motivation">
  <h1>Tumblelogs</h1>
  <h3>Back to square “One”. </h3>
  <?php include 'connect.php'; ?>
  <?php include 'title_bar.php'; ?>
  <br/>
  <?php
  $conn=connect();
  $sqli="SELECT id,post,qdate,qtime,userid FROM post where domain=10  ORDER BY qtime DESC";
  if ($run_post=mysqli_query($conn,$sqli))
    {
    while ($row=mysqli_fetch_row($run_post)){
    $post_id=$row[0];
    $post=$row[1];
    $post_date=$row[2];
    $post_time=$row[3];
    $userid=$row[4];
    ?>
      <div class='box'>
      <b><?php echo $userid;  ?></b> <font color='#ccc'> | Date :<?php echo $post_date; ?> | Time : <?php echo $post_time; ?><br/></br/>
        <?php echo $post; ?></font><br/><br/><br/>
        <div class='comments'>
          <?php
            $conn=connect();
          $querie="SELECT id, comment FROM comment Where post_id= $post_id";
            if($runpost=mysqli_query($conn,$querie)){

            while($row=mysqli_fetch_row($runpost))
            {
              $comment_id=$row[0];
              $comment=$row[1];

              ?>
              <div class='com'>
                <b> User: </b> <?php echo $comment; ?>
              </div>
                <?php
  }
              }
            ?>

          </div><br/>
    <input type='text' class='comment' size="30" post_id="<?php echo $post_id;?>" /></div>
      <?php
    }
  }?>
  <script src='jquery.js' ></script>
  <script src ='index.js'></script>
</body>
</html>
