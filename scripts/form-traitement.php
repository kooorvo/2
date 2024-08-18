<?php
    $to = "nathansegura2009@gmail.com";
    $subject = "Nouveau contact de $name";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    
    if(mail($to, $subject, $msg, $headers))
        echo "ok";
    else
        echo "non";
?>