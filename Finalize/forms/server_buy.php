<?php
    $db = mysqli_connect('localhost','root','','life_line_blood_bank');

    if (isset($_POST['buy'])) {
		$fullname = $_POST['fullname'];
		$phonenumber = $_POST['phonenumber'];
        $requiredpackage = $_POST['requiredpackage'];

		mysqli_query($db, "INSERT INTO buy (fullname, phonenumber, requiredpackage) VALUES ('$fullname', '$phonenumber',$requiredpackage')"); 
        // header('location: index.php');
	}

    ?>
   



