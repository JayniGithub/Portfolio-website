<!-- email -->
<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$sub = $_POST['subject'];
$mess = $_POST['message'];

$to =   'jayanihettiarachchi98@gmail.com';
$subject = 'Client Requests From Portfolio';
$message = "Name :".$name."\n"."Email :".$mail."\n"."Subject :".$sub."\n"."Project Description :".$mess ;
$headers = $mail ;

$retval = mail($to,$subject,$message,$headers);

if($retval == true){
    $mailmessage = "Message Sent Successfully";
    echo "<script type='text/javascript'>alert('$mailmessage');</script>";
    
}
else{
    $errormessage = "Email Not Sent Successfully";
    echo "<script type='text/javascript'>alert('$errormessage');</script>";
}
header('location:index.html');
?>