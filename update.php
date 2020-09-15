<?php

$id = $_GET['id'];



 $name = $_POST['name'];
 $age = $_POST['age'];
 $roll = $_POST['roll'];


$conn = mysqli_connect('localhost','root','','sms');
$sql= "UPDATE students SET name='$name', age='$age', roll='$roll' WHERE id=$id";

if(mysqli_query($conn,$sql)){
        header("location: show.php?id=" . $id);
}
else{
    echo "Not updated";
}

?>