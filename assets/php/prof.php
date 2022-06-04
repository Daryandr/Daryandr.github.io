<?php
$user = $_SESSION['user'];
$sql="SELECT * from buyer_info where email='$user'";
$query = mysqli_query($con,$sql);
$k = mysqli_fetch_assoc($query);
$name = $k['name'];
$phone = $k['phone'];
if(isset($_REQUEST['out'])){
    session_destroy();
    header("Refresh:0; url=../index.php");
}