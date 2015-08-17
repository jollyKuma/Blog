<?php

function addComment(){
$file1 = 'home-comment.txt';
$file2 = 'about-comment.txt';
$file3 = 'contact-comment.txt';

$content_page = 'home.php';
$name = $name = trim($_POST["name"]);
$email = $email = trim($_POST["email"]);
$comment= $comment= trim($_POST["comment"]);

$content = date('l jS \of F Y h:i:s A')." ,".$name." ,".$email." ,".$comment . "\n";

$content_page = 'home.php';
if(isset($_GET['page']))
    {
        $content_page = $_GET['page'] . ".php";
    }
    if($content_page == 'home.php' )
    {
    file_put_contents($file1, $content, FILE_APPEND);
    }
    if($content_page == 'about.php' )
    {
    file_put_contents($file2, $content, FILE_APPEND);
    }
    if($content_page == 'contact.php' )
    {
    file_put_contents($file3, $content, FILE_APPEND);
    }

echo "Content has been appened to the file.";

}
 ?>

<div class="forms">
<h1>Send a Comment </h1>
    <form method="POST">
        <input type="text"  name="name"   id="name"   placeholder="Full Name" value="<?php if(isset($_POST['name'])) { echo htmlentities($_POST['name']); } ?>" /><br>
        <input type="email" name="email"  id="email"  placeholder="Email"     value="<?php if(isset($_POST['email'])) { echo htmlentities($_POST['email']); } ?>" /><br>
        <textarea           name="comment"id="comment"placeholder="Comments"  value="<?php if(isset($_POST['comment'])) { echo htmlentities($_POST['comment']); } ?>"></textarea><br>
        <input type="submit" id="submit"name="submit" value="Submit" /><br>
    </form>
    <div>
        <?php if(isset($_POST["submit"])) { addComment(); } ?>
    </div>
</div>