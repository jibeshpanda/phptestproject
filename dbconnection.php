<?php
$con=mysqli_connect("192.168.10.69", "ajaya", "Ajaya@123", "ajaya", "3306");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>