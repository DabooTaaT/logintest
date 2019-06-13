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
        
        $Sql = "SELECT * from pic";
        $result = $conn ->query($Sql);
        if($result){
            $row = $result->fetch_array();
        }else{
            echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
        }
        
    ?>

<img src="<?=$row['name_pic'];?>" class="mid" width="10%" height="auto">

</body>
</html>