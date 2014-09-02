<?php
class Lost_password extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library(array('smtp','phpmailer'));
	}
	
	public function index()
	{
		

$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "tfukdate@gmail.com";  // GMAIL username
$mail->Password   = "escorts1976";
$webmaster_email = "admin@totallyfreeukdating.co.uk"; //Reply to this email ID
$email= strip_tags(trim($_POST['remail']));// Recipients email ID
$name="name"; // Recipient's name
$mail->From = "admin@totallyfreeukdating.co.uk";
$mail->FromName = "totallyfreeukdating";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"admin@totallyfreeukdating.co.uk");
$mail->WordWrap = 50; // set word wrap
/*$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
 $mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment*/
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Password";

$user="oop";
$host="totallyfreeukdating.co.uk";
$passwords="escort";
$database = "tfukd-OOP";
$connection = mysql_connect($host,$user,$passwords)
or die ("couldn't connect to server");
$db = mysql_select_db($database,$connection)
or die ("Couldn't select database");

$query = "SELECT password FROM member WHERE
email = '$email'";
$result = mysql_query($query)
or die ("Coudn't execute query.");

$row = mysql_fetch_array($result);
extract($row);


 
$mail->Body = "Your Password is:{$row['password']}"; //HTMl Body

$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
	echo "Password has been sent to your email address given";
	header('Refresh: 1; URL=http://www.totallyfreeukdating.co.uk');
}

}
}
?>