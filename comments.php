<?php

    function addComment(){
    // $file1 = 'home-comment.txt';
    $file2 = "about-comment.txt";
    // $file3 = 'contact-comment.txt';

    $content_page = 'home.php';
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $comment= trim($_POST["comment"]);

    $content = "<div class='view'> <p> <a href=". $email. " >". $name . "</a> - " .
               "<span>" . date('l jS \of F Y h:i:s A') . "</span>" ."<br /> " . $comment . " &emsp; </p> </div>". "\\n" ."\n";

    $content_page = 'home.php';
    if(isset($_GET['page']))
        {
            $content_page = $_GET['page'] . ".php";
        }
        if($content_page == 'about.php' )
        {
            file_put_contents($file2, $content, FILE_APPEND);
        }
        echo "Content has been appened to the file.";

    }

?>

<div class="forms">
<div id="renderDiv">

</div>
<h1>Send a Comment </h1>
    <form method="POST" action="">
        <input type="text"  name="name"   id="name"   placeholder="Full Name" value="<?php if(isset($_POST['name'])) { echo htmlentities($_POST['name']); } ?>" /><br>
        <input type="email" name="email"  id="email"  placeholder="Email"     value="<?php if(isset($_POST['email'])) { echo htmlentities($_POST['email']); } ?>" /><br>
        <textarea name="comment"id="comment"placeholder="Comments"  value="<?php if(isset($_POST['comment'])) { echo htmlentities($_POST['comment']); } ?>"></textarea><br>
        <input type="submit" id="submit" name="submit" value="Submit" /><br>
    </form>
    <div>
        <?php if(isset($_POST["submit"])) { addComment(); } ?>
    </div>
    
</div>

<script>
    (function() {
        function loadXMLDoc()
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function()
              {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    if (xmlhttp.responseText) {
                        var dataContainer, displayContainer = "";
                        dataContainer = xmlhttp.responseText.split("\n");
                        for (i = 0; i < dataContainer.length; i++) { 
                            console.log(dataContainer[i].toString().substring(0, dataContainer[i].length - 2));
                            displayContainer += dataContainer[i].toString().substring(0, dataContainer[i].length - 2);
                        }
                        document.getElementById('renderDiv').innerHTML = displayContainer;
                        console.log(dataContainer);
                    } else {
                        document.getElementById('renderDiv').innerHTML = "";
                    }
                    
                }
              }
            xmlhttp.open("GET","about-comment.txt",true);
            xmlhttp.send();
        }
        setInterval(loadXMLDoc, 2000);
    })();

</script>

