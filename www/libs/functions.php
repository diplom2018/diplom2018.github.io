<?php
$mysqli=false;

function connectDB(){
  global $mysqli;
  $mysqli=new mysqli ("localhost","root","1","diplom");
  $mysqli->query("SET NAMES 'utf8'");
}

function closeDB(){
  global $mysqli;
  $mysqli->close();
}

function initSession(){
session_start();
if (!isset($_SESSION['email'])) $_SESSION['email']="";
if (!isset($_SESSION['password'])) $_SESSION['password']="";
if (!isset($_SESSION['error_auth'])) $_SESSION['error_auth']=false;
$_SESSION["inited"]=true;
return $_SESSION["inited"];
}

function checkUser($email,$password){
global $mysqli;
connectDB();
$res=$mysqli->query("SELECT * FROM user WHERE nameUser='$email' AND passwordUser='$password'");
closeDB();
if($res->fetch_assoc()) return true;
else return false;
}

?>
