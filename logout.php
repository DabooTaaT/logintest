<?php
include('function.inc.php');
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
  Welcome to Admin Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?php
        
         echo  $_SESSION["username"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php 
        
        echo $_SESSION["name"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="">Edit</a><br>
  <br>
  <a href="check-logout.php">Logout</a>
</body>
</html>