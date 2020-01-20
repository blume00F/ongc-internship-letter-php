<html>
<body>
	
<?php
session_start();
ob_start();
$name = $_POST['name'];
$email = $_POST['email'];


$_SESSION["namee"]=$name;
$_SESSION["emaill"]=$email;


$conn = new mysqli('localhost','root','','fillform');

if( $stmt = $conn->prepare('SELECT name, email FROM registration WHERE name = ? AND email = ? AND marks_sem>=60'))
{
mysqli_stmt_bind_param($stmt, "si", $name,$email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result) !== 0)
{
$row = mysqli_fetch_assoc($result);
if(($row['name']==$name) && ($row['email']==$email))
{
    header("location: chooser.html");

}
}
else {
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username or Phone Number Incorrect. Try Again !!!');
    window.location.href='index.php';
    </script>"); 
}
}
$stmt->close();
$conn->close();
?>
</body>
</html>