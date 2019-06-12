<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_FILES['userfile'])){
    pre_r($_FILES);
    
  
}
?>


   fight
    <form actions=" " method="POST" enctype="multipart/form-data">
    <input type="file" name="userflie" />
    <input type="submit"    vaule="upload"/>
    </form>
</body>
</html>