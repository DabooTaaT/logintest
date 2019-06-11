<?php
    $conn =new mysqli('localhost','root','','login');
    
    if($conn->connect_errno){
        die("ยากไป ไปทำใหม่นะ" . $conn->connect_error);
    }
?>