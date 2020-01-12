
<?php
session_start();
ob_start();
$name = $_POST['name'];
$phone = $_POST['phone'];

$_SESSION["namee"]=$name;
$_SESSION["phonee"]=$phone;

$conn = new mysqli('localhost','root','','fillform');

if( $stmt = $conn->prepare('SELECT name, phone FROM registration WHERE name = ? AND phone = ? AND marks_sem>=60'))
{
mysqli_stmt_bind_param($stmt, "si", $name,$phone);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result) !== 0)
{
$row = mysqli_fetch_assoc($result);
if(($row['name']==$name) && ($row['phone']==$phone))
{
    header("location: letter.php");

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