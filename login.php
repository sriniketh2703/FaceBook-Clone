<?php
$con=mysqli_connect('localhost','root','','fb');
$phoneoremail=$_POST['phoneoremail'];
$password=$_POST['password'];

$check_data=mysqli_query($con,"SELECT * FROM fb_db WHERE phoneoremail='$phoneoremail' and password='$password'");
$check=mysqli_num_rows($check_data);
if($check > 0){
    header("Location:http://localhost/clone/mainpage.html");
}
else{
    header("Location:http://localhost/clone");
}
?>