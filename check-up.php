<?php
        include 'function.inc.php';
        $traget_dev="daboo/";
        $traget_file="$traget_dev.basename($_FILES['pic']['name'])";//basename เป็นfunction ที่มีอยู่แล้วใน php myadminบอกมางี้
        $uploadok=1;
        $imgtype=strtolower(pathinfo($traget_file,PATHINFO_EXTENSION));

        if(isset($_POST['submit'])){
                $check=getimagesize($_FILES['pic']['tmp_name']);
                if($check!= false){
                    echo"รูปภาพนะเป็นรูปนะจริงๆนะเชื่อหน่อยเหอะ".$check["mime"].".";
                    $uploadok=1;
                }
                else{
                    echo"มึงเอาไรมาใส่เขาบอกให้ใส่ไฟบ์รูป";
                    $uploadok=0;
            
                }

        }
        if(file_exists($traget_file)){
            echo"มีไฟล์อยู่แล้ว";
            $uploadok=0;
        }
        if($uploadok==0){
            echo"ไม่อัพให้มึงหรอกไม่ตรงเงือนไขอะ";
        }
        else{
            if(move_uploaded_file($_FILES["pic"]["tmp_name"],$traget_file)){
                $sql="INSERT INTO `pic`(`id`, `name_pic`) VALUES (NULL,'$traget_file')";
                $result=$conn->query($sql);
                echo"file".basename($_FILES['pic']['name'])."อัพไปแล้วนะ";
                if($result){
                    echo"บันทึกลงฐานข้อมูลแล้วนะ";
                }
                else{
                    echo"บันทึกไม่สำเร็จนะจะ";
                }
            }
            else{
                echo"ไฟล์ไม่ถูกอัพโหลด";
            }
        }






?>