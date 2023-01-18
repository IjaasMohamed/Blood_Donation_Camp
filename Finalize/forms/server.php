<?php
    $db = mysqli_connect('localhost','root','','life_line_blood_bank');

    if (isset($_POST['consult'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
        $message = $_POST['message'];

		mysqli_query($db, "INSERT INTO consult (username, email, message) VALUES ('$username', '$email','$message')"); 
        // header('location: index.php');
	}
?>