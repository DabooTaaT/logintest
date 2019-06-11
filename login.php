<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body>


  
   

<div class="container">
    <form name="form-login" action="check-login.php" method="POST">
         <div class="form-group">
             <label for="exampleInputEmail1">Username</label>
             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="username">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
         <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd">
        </div>
    
         <button type="submit" class="btn btn-primary"name="submit">login</button>
         <div class="col-sm-9"> 
            <a href="check-logout.php" class="">logout</a>
        </div> 
    </form>
    
</div>



  <script scr="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script scr="node_modules/jquery/dist/jquery.min.js"></script>
  <script scr="node_modules/popper.js/dist/popper.min.js"></script>
</body>
</html>