<?php
$mysqli = new mysqli(
  "mysql.jaybuch.com", 
  "jatanbuch", 
  "Aston1987", 
  "twitter_clone"
);
$result = $mysqli->query("SELECT * FROM twitter_clone WHERE 1 ORDER BY created DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Twitter Clone</title>    	
  <meta charset='utf-8'/>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/twitter.css">
  <link rel="stylesheet" type="text/css" href="css/twitter_responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="container-fluid">
<body>
    <header>
      <img src="images/twitter_logo.png" id="twitter_logo" class="img-responsive">
      <h1>Twitter</h1>
      <h4>Lets Connect</h4>
    </header>
  <div class="background_image">
      <img src="images/twitterbackground2.jpg" class="img-responsive" id="background_image"><!--position: absolute-->
  
    <section>
      <h3 id="post_updates">Post an update</h3>
      <form action="post_enter.php" method="POST">
        <input type="text" placeholder="enter a post" id="textarea" name="post_enter"><br />
      	<button id="post_button" class="btn btn-primary btn-lg">Post</button>
      </form>
      <h3 id="recent_updates">Recent Updates</h3>
      
<?php while ($row = $result->fetch_assoc()) : ?>
      <span><?php echo $row["post_enter"];?></span>
      <button id="report" class="btn btn-danger">Report</button>
<?php endwhile;?>
    </section>
    <article>
      <nav id="left_nav">      
        <ul id="left_items" class="nav nav-pills nav-stacked">
          <a href=""><li>Home</li></a>
          <a href=""><li>Notifications</li></a>
          <a href=""><li>Messages</li></a>
          <a href=""><li>Discover</li></a>
        </ul>
        <span class="glyphicon glyphicon-align-justify" aria-hidden="true" id="glyphicon"></span>  
      </nav>
    </article>    
    <footer><!--make footer fixed position at the bottom-->
      <p>&copy; <?php echo date("Y");?>  Copyright Twitter, Inc. All rights reserved.</p>  
    </footer>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
</body>
</div>
</html>