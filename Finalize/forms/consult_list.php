<?php
include('server.php'); 
$db = mysqli_connect('localhost','root','','life_line_blood_bank');
$results = mysqli_query($db, "SELECT * FROM consult"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consult List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Consult List</h1>
        </div>
        <div class="row">
                <div class="col-md-8">
                </div>
        </div>
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">username</th>
                    <th scope="col">Email</th>
                    <th scope="col">message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                <?php } ?>
                    <tr>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>