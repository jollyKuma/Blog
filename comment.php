<?php
$file1 = 'home-comment.txt';
$file2 = 'about-comment.txt';
$file3 = 'contact-comment.txt';

$date = '';
$name = '';
$email = '';
$comment= '';
$content_page = 'home.php';
    if(isset($_GET['page']))
    {
        $content_page = $_GET['page'] . ".php";
    }

    if($content_page == 'home.php' )
    {
    $content = file_get_contents($file1);
    $extract = explode((','),$content);
     $date   = $extract[0];
     $name   = $extract[1];
     $email  = $extract[2];
     $comment= $extract[3];

    echo "<div class='view'>";
    echo "<a href='$email'>$name</a>";
    echo "<p>$comment &emsp;<span>($date)</span></p>";
    echo "</div>";
    }
    if($content_page == 'about.php' )
    {
    $content = file_get_contents($file2);
    $extract = explode((','),$content);
     $date   = $extract[0];
     $name   = $extract[1];
     $email  = $extract[2];
     $comment= $extract[3];

    echo "<div class='view'>";
    echo "<a href='$email'>$name</a>";
    echo "<p>$comment &emsp;<span>($date)</span></p>";
    echo "</div>";
    }
    if($content_page == 'contact.php' )
    {
    $content = file_get_contents($file3);
    $extract = explode((','),$content);
     $date   = $extract[0];
     $name   = $extract[1];
     $email  = $extract[2];
     $comment= $extract[3];

    echo "<div class='view'>";
    echo "<a href='$email'>$name</a>";
    echo "<p>$comment &emsp;<span>($date)</span></p>";
    echo "</div>";
        echo $content_page;
    }

?>

