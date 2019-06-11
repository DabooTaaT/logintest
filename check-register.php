<?php

include_once('function.inc.php');

$name=$_POST['name'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];
$sqlchk = "SELECT * FROM member WHERE username='$username'";
$resultchk = mysqli_query($conn,$sqlchk);
if($name==''or $username=='' or $passwd==''){
    echo"<script>alert('กรอกข้อมูลใหม่โว้ยมึงกรอกไม่ครบ');window.location='register.php';</script>";
}
elseif($resultchk->num_rows > 0){
    echo"<script>alert('ควายว้ายๆๆโดนแย่งชื่อว้ายๆ');window.location='register.php';</script>";
}
elseif (strlen($passwd)<8) {
    echo"<script>alert('รหัสอย่างน้อย 8 ตัว กรอกให้ครบด้วยสัส');window.location='register.php';</script>";
}
else{
    $sql="INSERT INTO member (name, username ,passwd )  VALUES ('$name', '$username', '$passwd') " ; 
    $result=mysqli_query($conn,$sql);
    gotopage('login.php');
}



/*if(isset($_POST['submit'])){

    

    if($_POST[username] ==''  or $_POST[name] ==''or $_POST[passwd]=='')  {
          
          echo "<script>";
       echo "alert('กรอกข้อมูลให้ครบนะโว้ย');";
       echo "window.location='register.php';"; 
       echo "</script>";
      }
      
  
    $sql = "SELECT * FROM member WHERE passwd='$_POST[passwd]'";
   // print_r($sql);
  //  die();

    
    // ฟังชั่นเช็ค ว่าสมัครสมาชิกชื่อซำ้กันหรือไม่
     $result = mysqli_query($conn,$sql);#ทำการอ่านค่าที่ก็บอยู่ $sql
     if ($result->num_rows > 0) //ห้ามซำ้กันตรงเช็คค่า =0 
     
     {  
    echo "<script language='javascript'>alert('Username ซ้ำ');</script>";
    echo "<meta http-equiv='refresh' content='0;url=register.php' />";
     
  }
  
 
   else{ $sql="INSERT INTO member (name, username ,passwd )  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[passwd]') " ; 
        // print_r($sql);
         // die();
          $result=mysqli_query($conn,$sql);}
          

      }*/



?>