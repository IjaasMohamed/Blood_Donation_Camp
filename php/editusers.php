<?php
$db = mysqli_connect("localhost","root","","blood");
if(!$db){
    die('error in db'.mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from `crud` where id= $id";
    $run = $db -> query($qry);
    if($run-> num_rows > 0){
        while($row =$run -> fetch_assoc()){
            $name = $row['name'];
            $age = $row['age'];
            $address = $row['address'];
            $bloodgroup = $row['bloodgroup'];
            $place = $row['place'];

        }
    }

}




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit user</title>
</head>
<body>
  <center><h1>Update details</h1></center>
    <div class="container my-5">

    <form method ="post">
  <div class="mb-3">
    <label> name </label>
    <input type="text" class="form-control"  placeholder="Enter name " name="name" value="<?php echo $name ?>" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label> age </label>
    <input type="text" class="form-control"  placeholder="Enter age " name="age" value="<?php echo $age ?>" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label>Address </label>
    <input type="text" class="form-control"  placeholder="Enter address " name="address" value="<?php echo $address ?>"autocomplete="off">
  </div>
  
  <div class="mb-3">
    <label>blood group </label>
    <input type="text" class="form-control"  placeholder=" Enter blood group " name="bloodgroup" value="<?php echo $bloodgroup ?>"autocomplete="off">
  </div>

  <div class="mb-3">
    <label> Donation place </label>
    <input type="text" class="form-control"  placeholder="Enter place " name="place" value="<?php echo $place ?>"autocomplete="off">
  </div>
    <button type="submit" class="btn btn-primary" name="update" value="update">update details</button>

</form>
</body>
</html>

<?php 
if(isset($_POST['update'])){
    echo "update Successfully";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $bloodgroup = $_POST['bloodgroup'];
    $place = $_POST['place'];


    $qry = "update crud set name='$name' , age='$age' , address='$address', bloodgroup = '$bloodgroup' , place = '$place' where id = $id";
    if(mysqli_query($db ,$qry)){
        header('location: users.php');
    }else{
        echo mysqli_error($db);
    }
    
}
?>