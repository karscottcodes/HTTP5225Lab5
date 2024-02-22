<?php
    if(isset($_POST['update'])){ //isset checks if something exists
        $id = $_POST['id'];
        $fname = $_POST['fname']; 
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imgurl = $_POST['imgurl'];
    
        include('connect.php');
    
        $query = "UPDATE students SET `fname` = '$fname', `lname` = '$lname', `marks` = '$marks', `imgurl` = '$imgurl' WHERE `id` = '$id';";
        
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