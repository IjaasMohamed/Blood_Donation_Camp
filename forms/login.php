<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

mysqli_connect($host,$user,$password);
mysqli_select_db($db);

if(isset($_POST['username'])){
    
  $con =mysqli_connect($host,$user,$password);
  if($con)
  echo 'connected successfully';
  
  $sql="insert into loginform(username,password) values ('john','abc','a@si.com)";
  $query=mysql_query($con,$sql);
  
  if($query)
      echo 'data inserted successfully';      
}
?>


