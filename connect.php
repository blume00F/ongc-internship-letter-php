<?php
$name = $_POST['name'];
$date = $_POST['date'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$fname = $_POST['fname']; 
$mname = $_POST['mname'];
$institute = $_POST['institute'];
$course = $_POST['course'];
$marks_sem = $_POST['marks_sem'];
$marks_12th = $_POST['marks_12th'];

$conn = new mysqli('localhost','root','','fillform');
if($conn->connect_error)
{
	die('Connection Failed : ' .$conn->connect_eror);
}
else{
	$stmt = $conn->prepare("insert into registration(name, date, address, phone, email, fname, mname, institute, course, marks_sem,
		marks_12th)values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sisisssssdd",$name, $date, $address, $phone, $email, $fname, $mname, $institute, $course, $marks_sem, $marks_12th);
	$stmt->execute();
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Submitted Successfully!!!');
    window.location.href='fillform.html';
    </script>"); 
	$stmt->close();
	$conn->close();
}

?>