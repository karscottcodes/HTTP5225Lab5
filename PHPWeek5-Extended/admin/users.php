<?php
include('../includes/functions.php');

                if(isset($_POST['addUser'])){ //isset checks if something exists
                    $username = $_POST['username']; 
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    include('../includes/connect.php');
                
                    $query = "INSERT INTO users (`username`, `email`, `password`) VALUES (
                        '".mysqli_real_escape_string($connect, $username)."',
                        '".mysqli_real_escape_string($connect, $email)."',
                        '".md5($password)."'
                    );";
                
                    $user = mysqli_query($connect, $query);
                
                    set_message('User has been created.');

                    get_message();  

                } 
                    
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab 5</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Your custom styles if needed -->
    <link rel="stylesheet" href="./#" type="text/css">
</head>

<body>
<?php include('../reusables/nav.php');
?>

    <!-- Your content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Add New User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter Password">
                </div>

                <button type="submit" class="btn btn-primary" name="addUser">Add New User</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="./#"></script>
    <!-- Your custom scripts if needed -->

</body>

</html>