<?php 
// database connection code 
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database'); 
 
$con = mysqli_connect('localhost', 'root', '123456','artistric'); 
 
// get the post records 
$FirstName = $_POST['FirstName']; 
$LastName = $_POST['LastName']; 
 
$Phone = $_POST['Phone']; 
$Adress = $_POST['Adress']; 
$Email = $_POST['Email']; 
$Artwork = $_POST['Artwork']; 

 
// database insert SQL code 
$sql = "INSERT INTO clint (FirstName, LastName, Phone, Adress, Email, artwork) VALUES ('$FirstName', '$LastName', '$Phone', '$Adress', '$Email', '$Artwork')"; 
 
// insert in database  
$rs = mysqli_query($con, $sql); 
 
if($rs) 
{ 
 echo "Contact Records Inserted"; 
} 
 
?>