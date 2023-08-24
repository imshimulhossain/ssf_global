<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$service_name = $_POST['service_name'];
$budget = $_POST['budget'];
$deadline = $_POST['deadline'];
$needs = $_POST['needs'];

//Database Connection

$conn = mysqli_connect('localhost','root','','ssf_global');
if($conn->connect_error){

	die('Connection failed: '.$connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO quote(first_name, last_name, email, service_name, budget, deadline, needs) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssiis", $first_name, $last_name, $email, $service_name, $budget, $deadline, $needs);
	$stmt->execute();
	echo "<script>alert('Successfully submitted.')
				location.href = 'quote.php?attempt=success';
				</script>";
	$stmt->close();
	$conn->close();
}

?>