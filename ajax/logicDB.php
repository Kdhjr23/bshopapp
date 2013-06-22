
  <div data-role="page" id="six" data-theme="b">
<?php
if (isset($_POST['submit'], $_POST['phone'],$_POST['email'],$_POST['rservice'],$_POST['rsytlist'],$_POST['date'],$_POST['message']))
{

    require("PHPMailer-master/class.phpmailer.php");
	
	
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "kdhjr23@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "ss@325055"; // your SMTP password or your gmail password
$from = "webmaster@example.com"; // Reply to this email
$to="kdhjr23@gmail.com"; // Recipients email ID
$name="Jersey Name"; // Recipient's name
$mail->From = $from;
$mail->FromName = "Webmaster"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($from,"Webmaster");
$mail->WordWrap = 100; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Sending Email From Php Using Gmail";
$mail->Body =  "Name:".$_POST["name"]."\n"; 
$sentmail = NULL;
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
header ('location:../index.html');
}
}
?>
</div>

