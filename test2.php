<?php

if(isset($_POST['submit'])){
    
    $comment = $_POST['message'];

    $badWords = array( 'stupid', 'ass', 'fuck', 'bitch');
    $comment = str_replace($badWords, "****", $comment);

    echo $comment;
    die();
} 

