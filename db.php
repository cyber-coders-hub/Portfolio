<!-- If your are using xampp or wampp by default your servername = localhost , username = root , no password -->
<?php
$servername = ""; 
$username = ""; 
$password = ""; 
$database = ""; 
// Create connection 
$conn = mysqli_connect('server_name', 'user_name','password','database_name'); 
// Check connection 
$conn=  mysqli_connect('server_name','user_name','password');
mysqli_select_db($conn,'database_name');
?>