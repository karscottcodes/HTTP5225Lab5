<?php

// Connect to the MySQL database
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_db = "HTTP5225";

$connect = mysqli_connect(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if (!$connect) {
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab 5</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Your custom styles if needed -->
    <link rel="stylesheet" href="./#" type="text/css">
</head>

<body>

    <!-- Your content goes here -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-4 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php

            // Create a query
            
            $query = "SELECT id, fname, lname, marks, grade, imgurl FROM students ORDER BY marks DESC";

            // Execute the query
            $students = mysqli_query($connect, $query);

            if (!$students) {
                echo 'Error Message: ' . mysqli_error($connect) . "<br>";
                exit;
            }

            // Display the number of recirds found
            echo '<div class="row"><div class="col-sm-12"><p>The query found : ' . mysqli_num_rows($students) . ' rows.</p></div></div>';
            ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            // Loop through the records found
            foreach ($students as $student) {

                if ($student['marks'] < 50) {
                    $bgClass = "bg-danger";
                } else {
                    $bgClass = "bg-success";
                }

                echo '<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card ' . $bgClass . '" style="width: 18rem;">
                <img class="card-img-top" src="' . $student['imgurl'] . '" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="ca$
                <p class="card-text">
                    <ul style="list-style-type: none;">
                        <li>Marks: ' . $student['marks'] . '</li>
                        <li>Grade: ' . $student['grade'] . '</li>
                </div>
            </div>
            </div>';
            }
            ?>

        </div>
    </div>
    </div>


    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXs5RSfQ8qU6HT97V72Q3E+28bO2LsM2JL1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="./#"></script>
    <!-- Your custom scripts if needed -->

</body>

</html>