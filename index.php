<?php
    $content_page = 'home.php';
    $comment_page =  'comments.php';
    $comments_page = 'comment.php';
    if (isset($_GET['page']))
    {
        $content_page = $_GET['page'] . ".php";
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>My Personal Portfolio</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
 </head>
 <body>
 <?php include 'header.php'; ?>
    <div id="content">
            <?php include $content_page; ?>
    </div>
    <div class="view">
   <h1>Comments:</h1>
</div>
<div class="back">
    <div>
        <?php include $comments_page; ?>
    </div>
    <div>
            <?php include $comment_page; ?>
    </div>
    </div>
 </body>
 </html>