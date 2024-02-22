<?php

include("includes/connect.php");

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
<?php include('reusables/nav.php');
?>

    <!-- Your content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Add Grades</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form action="includes/addGrades.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="firstNameHelp" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lastNameHelp" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="marks">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks" aria-describedby="marksHelp" placeholder="Enter Marks">
                </div>
                <div class="form-group">
                    <label for="imgurl">Image URL</label>
                    <input type="text" class="form-control" id="imgurl" name="imgurl" aria-describedby="imageHelp" placeholder="Enter Image URL">
                </div>
                <button type="submit" class="btn btn-primary" name="grades">Submit</button>
                </form>
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