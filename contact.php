<!DOCTYPE html>
<html>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141051359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141051359-1');
</script>

            <link rel="stylesheet" type="text/css" href="css/lklbc.css">
      <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Portfolio</title>
  </head>
  <body>
<div id="page">
    <div id="navbar"></div>
    <div id="headbar"></div>
      <main class="container">
          
        
          <h1><font color="black">THANK YOU</font></h1>
          <div>Thank you for message!  I will get back to you as soon as I can.  </div>

<h2>Your Information</h2>
<ul>
<li><strong>
    Name:</strong> 
    <?php 
        echo $_POST["name"]; 
        $sendername = $_POST["name"]; 
    ?>
    
    </li>
<li><strong>Email Address:</strong> 
    <?php 
        echo $_POST["email"]; 
        $senderem = $_POST["email"];
    ?>
    </li>

<li><strong>Message:</strong> 
    <?php 
    echo $_POST["comments"]; 
    $msg = $_POST["comments"];
    ?>
</li>
    </ul>

<?php
$headerMsg = 'Sender name: ' . $sendername . " \r\n" . 'Sender email: ' . $senderem;
          mail("lhk4323@domain.com","Incoming email from site",$msg,$headerMsg);
?>

          </main>
      </div>    
</body>
    <script>
    
$(document).ready(function() {
     $("#navbar").load("nav.html");
    
    
});    
    
</script>
</html>
