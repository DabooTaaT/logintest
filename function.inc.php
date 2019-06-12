<?php 
ob_start();
session_start(); 
$conn =new mysqli('localhost','root','','login');
    
if($conn->connect_errno){
    die("ยากไป ไปทำใหม่นะ" . $conn->connect_error);
}
function gotopage($url) {
	echo "<script language='javascript'>"; 
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
function msgbox($text,$url) {
	echo "<script language='javascript'>"; 
	echo " alert('".$text."'); ";
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
function move_file(){
	
}

?>