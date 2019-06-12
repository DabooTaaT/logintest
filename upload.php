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
    include 'function.inc.php';
    if (isset($_FILES['userfile'])){
        pre_r($_FILES);}
    
    ?>
  <!--  <form actions=" " method="POST" enctype="multipart/form-data">
    <input type="file" name="userfile"/>
    <input type="submit" vaule="upload" />

          
    </form>-->
    <form actions=" " method="POST" enctype="multipart/form-data">
      <div class="text-center"><!--ใส่เงื่อนไขโชว์รูป-->

        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        
        <div class="col-12">
        <input type="file" name="userfile">
        </div>
        <div class="col-1">
        <input type="submit" vaule="upload" />
        </div>
      </div>
      </form>
</body>
</html>