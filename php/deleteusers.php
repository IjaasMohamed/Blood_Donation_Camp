<?php
$db = mysqli_connect("localhost","root","","blood");
if(!$db){
    die('error in db'.mysqli_error($db));
}

$id = $_GET['id'];


$qry = "delete from crud where id = $id";
if(mysqli_query($db ,$qry)){
    header('location: users.php');
}else{
    echo mysqli_error($db);
}

?>