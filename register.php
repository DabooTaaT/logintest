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
    <form name="form-login" action="check-register.php" method="POST">
        <div class="col-50">
         <div  class="col-4">
             <label for="name">Name</label>
             <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" name="name">
             <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
         </div>
         <div  class="col-4">
             <label for="username">Username</label>
             <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="username" name="username">
             <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
         </div>
         </div>
         <div class="col-6">
             <label for="psw">Password</label>
             <input type="password" class="form-control" id="passwd" placeholder="Password" name="passwd" pattern="{8,}"required>  
        </div>
    
         <button type="submit" class="btn btn-primary"name="submit">submit</button>
    </form>
    </div>




  <script scr="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script scr="node_modules/jquery/dist/jquery.min.js"></script>
  <script scr="node_modules/popper.js/dist/popper.min.js"></script>
</body>
</html>