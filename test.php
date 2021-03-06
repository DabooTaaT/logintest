<html>
<head>
<title>File Upload</title>
</head>
<body>
<?php
     
     include 'function.inc.php';
    if (isset($_FILES['userfile'])){
        pre_r($_FILES);

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
        }

        move_uploaded_file($_FILES['userfile']['tmp_name'],'daboo/'.
                $_FILES['userfile']['name']);
    }
    $sql ="INSERT INTO `photo`(`id`, `mem_id`, `image`, `lastname`, `name`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])"
    


?> 
    <form actions="" method="POST" enctype="multipart/form-data">
        <input type="file" name="userfile"/>
        <input type="submit" value="Upload"/>
    </form>
</body>
</html>