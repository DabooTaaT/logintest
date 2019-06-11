<?php
    include_once('function.inc.php');
    
    
    if(isset($_POST['submit'])){
        
        $sql="SELECT * FROM member where  username='$_POST[username]' and passwd = '$_POST[passwd]' ";
        $result=mysqli_query($conn,$sql);
       // print_r($sql);
        //die();
        
        if (mysqli_num_rows($result) > 0){
            
            $ck=mysqli_fetch_array($result);
            $_SESSION["username"] = $ck["username"];
            $_SESSION["name"] = $ck["name"];
            $_SESSION["passwd"] = $ck["passwd"];
            $_SESSION["id"]=$ck["id"];
          //  echo$_SESSION["username"].$_SESSION["name"].$_SESSION["passwd"];
            gotopage('index.php');
        }
        else {
            msgbox('รหัสไม่ถูกต้องไอ่ความ','login.php');          
           
           }
        
   }