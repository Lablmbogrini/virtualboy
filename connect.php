<?php
$fullname = $_POST['firstname'];
$password = $_POST['firstname'];
$phone numebr = $_POST['firstname'];

//Database connection
$conn = mysql('localhost','','test');
if($conn->connect_error){
	die('c\Connection Failed  : '.$conn_error);
}else{
	$stmt = $conn->prepare("insert into registration(full name,password,phone number")
	values(?,?,?)");
	$stmt->blind_param("sii",$fullname,$password,$phone number);
	$stmt->execute();
	echo "registartion succesful...";
	$stmt->close();
	$conn->close();


}
}
?>