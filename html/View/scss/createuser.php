<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();

	
	
	include("config.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$date = $_POST['date'];

		if(!empty($user_name) && !empty($password) && !empty($date) && !is_numeric($user_name))
		{
			$db = config::getConnection();

        try
        {
            $query = $db->prepare('INSERT INTO users (user_id,user_name,password,date)
        VALUES(:user_id,:user_name,:password,:date)');
            $query->bindValue('user_id', rand(1,1000) , PDO::PARAM_INT);
            $query->bindValue('user_name',"$user_name");
            $query->bindValue('password', "$password");
            $query->bindValue('date', "$date");
            $query->execute();
            header('Location: login.php');
        } 
        catch(PDOException $e)
        {
            $e->getMessage();
        }
		}else
		{
			echo "Please enter some valid information!";
		}
	}

    if(isset($_POST["submit"])){
        $mail= new PHPMailer(true);
    
     $mail->isSMTP();
     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth=true;
     $mail->Username='reservitn@gmail.com';  //Website mail
     $mail->Password = 'kpaqqhmdqzddiluq';  //required code
     $mail->setFrom('reservitn@gmail.com');
     $mail->addAddress($_POST["date"]);  //$_POST["email"]
     
     $mail->isHTML(true);
     $mail->Subject = 'Thank You for Your signup ';  //$_POST["email"]
     
     $txt = nl2br (" Hello \r\n".$_POST["user_name"]." Thank you for your sign up we Hope you are going to do a lot of reservation, see you soon.");
     
     
     $mail->Body = $txt;
    
    
     $mail->send();
    
            
        }
?>