<?php
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];

//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into regisration(Name, Phone, Email)
    values(?, ?, ?)")
    $stmt->bind_param("sis",$Name, $Phone, $Email);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>