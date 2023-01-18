<?php $db = mysqli_connect("localhost","root","","blood"); ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="styles/Home.css" rel="stylesheet"  type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    
     <style>
body {background-color:darkgray;}
h1   {color: black;}
p    {color: red;}

</style>
</head>
<body>
<header>
			<div class="wrapper">
				<div class="logo">
					<img src="images/bld1.jpg" width="250px" style="border: solid #fff;">
				</div>
				<nav>
					<a href="php/users.php" class="navtab">Donate blood</a>
				<a href="userlog.html" class="navtab">receive blood</a>
			
				<a href="events.html" class="navtab">Our projects</a>
				</nav>
				
			

			</div>
		</header>
    <center><h1>Enter Details</h1></center>
    <div class="container my-5">

    <form method ="post">
  <div class="mb-3">
    <label>Enter Your name </label>
    <input type="text" class="form-control"  placeholder="Enter name " name="name" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label>age </label>
    <input type="text" class="form-control"  placeholder="Enter age " name="age" autocomplete="off">
    
  </div>
  <div class="mb-3">
    <label>Address </label>
    <input type="text" class="form-control"  placeholder="Enter address " name="address" autocomplete="off">
</div>
<div class="mb-3">
    <label>Blood Group </label>
    <input type="text" class="form-control"  placeholder=" Enter blood Group " name="bloodgroup" autocomplete="off">
  </div>

  <div class="mb-3">
    <label>Donation Place </label>
    <input type="text" class="form-control"  placeholder="Enter Place " name="place" autocomplete="off">
  </div>
  

  <button type="submit" class="btn btn-primary" name="pay">save</button>
</form>

<hr>

<h3>Donation List</h3>
<table style="width: 80%" border="5">
  <tr>
    <th>NO</th>
    <th>name</th>
    <th>age</th>
    <th>address</th>
    <th>blood group</th>
    <th>place</th>
    <th>Oparations</th>
  </tr>

  <?php
  $i = 1;
  $qry = "select * from `crud`";
  $run = $db -> query($qry);
  if($run -> num_rows > 0){
    while($row = $run -> fetch_assoc()){
      $id = $row['id'];

   
  ?> 
   
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['age'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['bloodgroup'] ?></td>
    <td><?php echo $row['place'] ?></td>
    <td>
      <a href="editusers.php?id=<?php echo $id; ?> ">Edit</a>
      <a href="deleteusers.php?id=<?php echo $id; ?>" onclick="return confirm('Are You sure want to delete this user ?')">Delete</a>
    </td>

  </tr>
<?php
 }

}
?>
  
</table>
  

    </div>
</body>
</html>

<?php
if(isset($_POST['pay'])){
  $name = $_POST['name'];
  $email = $_POST['age'];
  $address = $_POST['address'];
  $paymentmethod = $_POST['bloodgroup'];
  $Amount = $_POST['place'];

  $qry = "insert into `crud` values(null, '$name', '$age' , '$address','$bloodgroup','$place')";
  if(mysqli_query($db, $qry)){
    echo '<script>alert("inserted Succesfully");</script>';
    header('location: users.php');
  }
  else{
    echo mysqli_error($db);  
  }
}



?>