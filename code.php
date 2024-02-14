<?php
require 'config/function.php';

if(isset($_POST['saveUser']));
{
    $name =validate($_POST['name']);
    $class =validate($_POST['class']);
    $roll =validate($_POST['roll']);
    $fname =validate($_POST['fname']);
    $tname =validate($_POST['tname']);

    if($name !='' ||$class !='' ||$roll !='' || $fname !='' || $tname !=''){
        $query = "INSERT INTO student (name, class, roll,fname,tname) 
        VALUES ('$name','$class','$roll','$fname','$tname')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('Data uploaded successfully');</script>";
            redirect('setup.php','Student added successfully');

        }
        else{
            echo "<script>alert('Data Not Saved');</script>";
        }
    }
    else{
        echo "Please fill all the fields";
    }
}
?>