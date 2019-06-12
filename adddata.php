<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
    
</head>
<body>
    
<form actions=" " method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LASTNAME</label>
    <input type="text" class="form-control" id="lastname" placeholder="lastname">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1"> ADDRESS</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
 <div>  <input type="file" name="userfile"/></div> 
        
 
   <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>



<?php
include 'function.inc.php';




$name=$_POST['name'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];









?>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>