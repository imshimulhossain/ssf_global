<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Database Connection

$conn = mysqli_connect('localhost','root','','ssf_global');
if($conn->connect_error){

	die('Connection failed: '.$connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO contact(first_name, last_name, email, subject, message) VALUES(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
	$stmt->execute();
	echo "<script>alert('Successfully submitted.')
				location.href = 'contact.php?attempt=success';
				</script>";
	$stmt->close();
	$conn->close();
}

?>