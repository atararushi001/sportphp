<?php
include_once("config.php");
session_start();
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
  
require '..\vendor\autoload.php';
if(isset($_POST['register'])){
    $data['fname'] = "'".$_POST['fname'];
    $data['lname'] = $_POST['laname'];
    $data['enroll'] = $_POST['enroll'];
    $data['branch'] = $_POST['branch'];
    $data['address'] = $_POST['address'];
    $data['country'] = $_POST['country'];
    $data['statelist'] = $_POST['statelist'];
    $data['city'] = $_POST['city'];
    $data['email'] = $_POST['email'];
    $data['phone'] = $_POST['phone'];
    $data['password']= md5($_POST['password'])."'";
    $cpassword = $_POST['cpassword'];    
    $dataes = implode("','",$data);


    
	 $sql="INSERT INTO `user`( `fname`, `lname`, `enroll`, `branch`, `address`, `city`, `country`, `state`, `email`, `phone`, `password`) VALUES ($dataes)"; 

	 $result = $con->query($sql);
     if($result == true){
        header("location: ../login.php");
     }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password= md5($_POST['password']);
	 $sql="SELECT * FROM `user` WHERE `email` = '$email' and `password` = '$password'"; 
	 $result = $con->query($sql);
     if($result->num_rows){
        
        $result =  $result->fetch_assoc();
        $_SESSION['uid'] = $result['user_id'];
        header("location: ../index.php");
     }
     else{
      header("location: ../login.php?check");
     }
}

if(isset($_POST['emailverify'])){

           $email = $_POST['emailverify'];
          $sql="SELECT * FROM `otp` WHERE email ='$email' "; 
           $result = $con->query($sql);
           $result =  $result->fetch_assoc();
    

}
if(isset($_POST['emailotp'])){
    $email = $_POST['emailotp'];
    $mail = new PHPMailer(true);
  
    try {
        $mail->SMTPDebug = 1;         
                                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com;';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'ratara920@rku.ac.in';                 
        $mail->Password   = 'rushi@001';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
        $mail->setFrom('ratara920@rku.ac.in', 'Name');           
        $mail->addAddress($email);
        $mail->addAddress($email, 'otp');
        $mail->smtpConnect(
          array(
              "ssl" => array(
                  "verify_peer" => false,
                  "verify_peer_name" => false,
                  "allow_self_signed" => true
              )
          )
      );
      $randomNumber = rand(1111,9999);
        $mail->isHTML(true);                                  
        $mail->Subject = 'opt from gym';
        $mail->Body    = 'send you otp'.$randomNumber;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
       
    } catch (Exception $e) {
      
    }
    $sql="INSERT INTO `otp`( `email`, `otp`) VALUES ('$email',$randomNumber)"; 
    $result = $con->query($sql);
    echo $randomNumber;
}   

if(isset($_POST['add'])){
   $qu_id = $_POST['qu_id'];
   $numused= $_POST['numused'];
   $userid=$_SESSION['uid'];
   $sql="INSERT INTO `userequipment`(`user_id`, `qu_id`, `numused`) VALUES ('$userid',' $qu_id','$numused')"; 

	 $result = $con->query($sql);
  
     if($result == true){
     
        header("location: ../index.php");
     }
}
if(isset($_POST['update'])){
   $fname = $_POST['fname'];
   $lname = $_POST['laname'];
   $enroll = $_POST['enroll'];
   $branch = $_POST['branch'];
   $address = $_POST['address'];
   $country = $_POST['country'];
   $statelist = $_POST['statelist'];
   $city = $_POST['city'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];  
   $userid=$_SESSION['uid'];
   $sql="UPDATE `user` SET`fname`='$fname',`lname`='$lname',`enroll`='$enroll',`branch`='$branch',`address`='$address',
    `city`='$city',`country`='$country',`state`='$statelist',`email`='$email',`phone`='$phone' WHERE user_id = $userid "; 


   $result = $con->query($sql);
    if($result == true){
       header("location: ../editprofile.php");
    }
}
if(isset($_POST['contact'])){

   
   $fanme= $_POST['fanme'];
   $email= $_POST['email'];
   $message= $_POST['message'];
   $mail = new PHPMailer(true);
  
   try {
       $mail->SMTPDebug = 1;         
                                     
       $mail->isSMTP();                                            
       $mail->Host       = 'smtp.gmail.com;';                    
       $mail->SMTPAuth   = true;                             
       $mail->Username   = 'ratara920@rku.ac.in';                 
       $mail->Password   = 'rushi@001';                        
       $mail->SMTPSecure = 'tls';                              
       $mail->Port       = 587;  
       $mail->setFrom('ratara920@rku.ac.in', 'Name');           
       $mail->addAddress('pdelvadiya328@rku.ac.in');
       $mail->addAddress('pdelvadiya328@rku.ac.in', 'rushi');
       $mail->smtpConnect(
         array(
             "ssl" => array(
                 "verify_peer" => false,
                 "verify_peer_name" => false,
                 "allow_self_signed" => true
             )
         )
     );
       $mail->isHTML(true);                                  
       $mail->Subject = 'Subject';
       $mail->Body    = 'HTML message body in <b>bold</b> ';
       $mail->AltBody = 'Body in plain text for non-HTML mail clients';
       $mail->send();
       echo "Mail has been sent successfully!";
   } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
  
  exit();
// $sql="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$fanme','$email','$message')"; 

//    $result = $con->query($sql);
//     if($result == true){
//        header("location: ../contact.php");
//     }
}
?>