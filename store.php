<?php
 $name = $_POST['name'];
 $age = $_POST['age'];
 $roll = $_POST['roll'];


$conn = mysqli_connect('localhost','root','','sms');
$sql= "INSERT INTO students VALUES( NULL, '$name','$age','$roll')";
if(mysqli_query($conn,$sql)){
    header("location: index.php");
}
else{
    echo"Not inserted";
}

?>