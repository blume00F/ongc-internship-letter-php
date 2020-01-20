
<?php

use PHPMailer\PHPMailer\PHPMailer;
use Dompdf\Dompdf;
if(isset($_POST["action"]))
{
	
	require_once 'dompdf/autoload.inc.php';
 $file_name = md5(rand()) . '.pdf';
 ob_start();
include "lettermain.php";
$html = ob_get_clean();
ob_end_clean();

$pdf = new DOMPDF();

$pdf->loadHtml($html);
$pdf->setPaper('A4', 'portrait');
$pdf->render();
$file = $pdf->output();
file_put_contents($file_name, $file);

 require_once "PHPMailer/PHPMailer.php";
 require_once "PHPMailer/SMTP.php";
 require_once "PHPMailer/Exception.php";

 $mail = new PHPMailer;
 $mail->IsSMTP();        //Sets Mailer to send message using SMTP
 $mail->Host = "smtp.gmail.com";  //Sets the SMTP hosts of your Email hosting, this for Godaddy
 $mail->Port = 465;        //Sets the default SMTP server port
 $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
 $mail->Username = "stealphx@gmail.com";     //Sets SMTP username
 $mail->Password = "";     //Sets SMTP password
 $mail->SMTPSecure = "ssl";       //Sets connection prefix. Options are "", "ssl" or "tls"

 $mail->setFrom($_SESSION["emaill"]);  //Sets the From name of the message
 $mail->addAddress($_SESSION["emaill"]);  //Adds a "To" address      
 $mail->isHTML(true);       //Sets message type to HTML    
 $mail->AddAttachment($file_name);         //Adds an attachment from a path on the filesystem
 $mail->Subject = 'ONGC Internship Letter (Attachment)';   //Sets the Subject of the message
 $mail->Body = '<b>Please Find your details in the attached PDF File.</b><br>
 <br>
 	Our various internship programs are a collaborative learning and practical development opportunity. Interns learn from and network with company leaders from a wide range of business functions, including marketing, sales, drilling & exploration technology.<br>

ONGC is committed to groom talent to prepare the road map for tomorrow’s national energy security. With this in view, ONGC offers various internship opportunities apart from Oil and Gas Jobs for freshers at ONGC.At ONGC, we offer many exciting opportunities for college students and recent graduates who want to develop relevant skills in a collaborative, dynamic and fast-paced environment. Our interns gain real, meaningful experience working for a global leader in the Oil & Gas industry.';    //An HTML or plain text message body
 if($mail->Send())        //Send an Email. Return true on success or false on error
 {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mail Sent Successfully!!!');
    window.location.href='index.php';
    </script>");
 }
 unlink($file_name);
}

?>