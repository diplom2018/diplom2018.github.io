<?php
$mysqli=false;

function connectDB(){
global $mysqli;
$mysqli=new mysqli("localhost","root","","morg");
$mysqli->query("SET NAMES 'utf8'");
}

function closeDB(){
global $mysqli;
$mysqli->close();
}

function getCase1(){
   global $mysqli;
   connectDB();
   $res=$mysqli->query("SELECT * FROM keyss WHERE id_keyss=1");
   closeDB();
   return $res->fetch_assoc();
}

function fromObjectToArray($res_object){
  $res_array=array();
  $i=0;
  while (($row=$res_object->fetch_assoc())!=false)
  {$res_array[$i]=$row; $i++;}

  return $res_array;
}

function getCases(){
  global $mysqli;
  connectDB();
    $res=$mysqli->query("SELECT * FROM keyss");
    closeDB();
    return fromObjectToArray($res);
}

function addVrach($email,$password){
  global $mysqli;
  connectDB();
  $res=$mysqli->query("INSERT INTO vrach (email,password) VALUES ('$email','$password')");
  closeDB();
  return $res;

}


?>
