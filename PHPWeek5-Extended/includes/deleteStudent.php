<?php
    if(isset($_GET['delete'])){ //isset checks if something exists
        // print_r($_POST); //GRABS ALL VARIABLES AND OUTPUTS
        // $fname = $_POST['fname']; 
        // $lname = $_POST['lname'];
        // $marks = $_POST['marks'];
        // $imgurl = $_POST['imgurl'];

        $id = $_GET['id'];
    
        include('connect.php');
    
        $query = "DELETE FROM students WHERE `id` = '$id'";
    
        $student = mysqli_query($connect, $query);
    
        if($student){
            echo "Success";
        } else {
            echo "Fail" . mysqli_error($connect);
        }

    } else {
        echo "You should not be here!";
    }

?>