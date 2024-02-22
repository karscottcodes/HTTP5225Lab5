<?php
include("includes/functions.php");
include("includes/connect.php");

if(isset($_POST['login'])){ //isset checks if something exists
  $query = 'SELECT * FROM `users`
            WHERE email = "' . $_POST["email"] . '"
            AND password = "' . md5($_POST['password']) . '"
            LIMIT 1';

    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)){
      $record = mysqli_fetch_assoc($result);
      $_SESSION['id'] = $record['id'];
      header('Location: admin/index.php');
      die();
    } else {
      set_message('Incorrect Username/Password');
      die();
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Update | Lab 5</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Your custom styles if needed -->
  <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
  <?php include('reusables/nav.php');
  ?>


  <!-- Your content goes here -->
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Login</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <?php echo get_message(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <main class="form-signin w-100 m-auto">
          <form method="post" action="">
          <i class="bi bi-apple" styles="font-size: 50px;"></i>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit" name="login">Log In</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
          </form>
        </main>
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