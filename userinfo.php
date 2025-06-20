<?php
$con = mysqli_connect('127.0.0.1:3307', 'root', '', 'userdata');
if($con){
    echo"Connection successful";
}else{
    echo"No connection";
}
mysqli_select_db($con, 'userdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$query="insert into userinfodata(user, email, mobile, comment) values('$user','$email','$mobile','$comment')";
mysqli_query($con,$query);
header('location:index.php');
?>
