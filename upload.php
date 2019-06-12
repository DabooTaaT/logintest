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
        //pre_r($_FILES);

        $phpFileUploadErrors = array(
            0 => 'There is no error, the file uploaded with success',
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'The uploaded file was only partially uploaded',
            4 => 'No file was uploaded',
            6 => 'Missing a temporary folder',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.',
        );

        $ext_error = false;
        $extensions = array('jpg','jpeg','gif','png');
        $file_ext = explode('.',$_FILES['userfile']['name']);
        $file_ext = end($file_ext);
        
        if(!in_array($file_ext,$extensions)){
            $ext_error = true;
        }

        if ($_FILES['userfile']['error']){
            echo $phpFileUploadErrors[$_FILES['userfile']['error']];
        }
        elseif ($ext_error){
            echo "Invalid file extension!";
        }
        else{
            echo "Success! Image has been uploaded!";
            move_uploaded_file($_FILES['userfile']['tmp_name'],'daboo/'.
                $_FILES['userfile']['name']);
                $sql
        }

       
    }
    
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
      <img src="daboo\<?php  echo $_FILES['userfile']['name'];?>" width="192" height="192">
</body>
</html>