<?php
include('server_buy.php'); 
$db = mysqli_connect('localhost','root','','life_line_blood_bank');
$results = mysqli_query($db, "SELECT * FROM buy"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Buyer List</h1>
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
                    <th scope="col">fullname</th>
                    <th scope="col">phonenumber</th>
                    <th scope="col">requiredpackage</th>
                   
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td><?php echo $row['requiredpackage']; ?></td>
                    </tr>
                <?php } ?>
                    <tr>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
