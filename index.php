<?php

  require( __DIR__.'/facebook_start.php' );
  //  require( __DIR__.'/resize.php' );
  $helper = $fb->getRedirectLoginHelper();
 
  $permissions = ['email', 'user_posts','publish_actions']; // optional
  $callback    = 'http://isupportnetneutrality.in/login.php';
  $loginUrl    = $helper->getLoginUrl($callback, $permissions);

  //Selecting a random image 
  $bg=['images/bg1.jpeg','images/bg2.jpg','images/bg3.jpg','images/bg4.jpg','images/bg5.jpg'];
  $bg_path=$bg[array_rand($bg)];
  //debug_to_console($bg_path));

  ?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Show your support for Net Neutralty </title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <img src=<?php echo $bg_path?> class="bg">
    <div class="container">
      <div class="row">
        
        <div class="header">
          <h1>Show your support for Net Neutrality</h1>
          <img class="profile" src="images/mark.jpg"/>
        </div>
        <div class="content">
        <br/>
        <p>Show your support for Net Neutrality by changing facebook profile picture. </p>
        <p>(It will not automatically change you picture)</p>
      
        
          <a class="button button-primary" href=<?php echo htmlspecialchars($loginUrl)?> > Change my Facebook picture </a>


        
        
        </div>
        <ul class="share-buttons">
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fisupportnetneutrality.in%2F&t=Show%20your%20support%20for%20Net%20Neutralty" title="Share on Facebook" target="_blank"><img src="images/simple_icons_black/Facebook.png"></a></li>
          <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fisupportnetneutrality.in%2F&text=Show%20your%20support%20for%20Net%20Neutralty:%20http%3A%2F%2Fisupportnetneutrality.in%2F&via=ashwinm" target="_blank" title="Tweet"><img src="images/simple_icons_black/Twitter.png"></a></li>
          <li><a href="http://www.reddit.com/submit?url=http%3A%2F%2Fisupportnetneutrality.in%2F&title=Show%20your%20support%20for%20Net%20Neutralty" target="_blank" title="Submit to Reddit"><img src="images/simple_icons_black/Reddit.png"></a></li>
          <li><a href="mailto:?subject=Show%20your%20support%20for%20Net%20Neutralty&body=Let%20us%20show%20our%20support%20for%20Net%20Neutrality%20by%20changing%20our%20facebook%20profile%20picture:%20http%3A%2F%2Fisupportnetneutrality.in%2F" target="_blank" title="Email"><img src="images/simple_icons_black/Email.png"></a></li>
        </ul>
        <footer class="footer"><a href='https://github.com/ashwin47/Net-Neutral'>Made</a> by <a href="http://twitter.com/ashwinm">@ashwinm</a> </footer>
      </div>
    </div>
    
  </body>
</html>