<?php
    if(isset($_POST['grades'])){ //isset checks if something exists
        print_r($_POST); //GRABS ALL VARIABLES AND OUTPUTS
        $fname = $_POST['fname']; 
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imgurl = $_POST['imgurl'];
    
        include('connect.php');
    
        $query = "INSERT INTO students (fname, lname, marks, imgurl) VALUES (
            '".mysqli_real_escape_string($connect, $fname)."',
            '".mysqli_real_escape_string($connect, $lname)."',
            '".mysqli_real_escape_string($connect, $marks)."',
            '".mysqli_real_escape_string($connect, $imgurl)."'
        );";
    
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