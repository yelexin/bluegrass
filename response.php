<?php  
session_start();
require_once "Mail.php"; //记得将Pear目录加入环境，才能这样引用，否则要引用绝对路径  
if(isset($_GET["captcha"])&&isset($_SESSION["authum_session"])){
	$captcha=$_GET["captcha"];
	if($captcha!=$_SESSION["authum_session"]){

		echo("验证码错误");
	}else{

		$from = "wertyuiopsdfghjkl@163.com ";   //发送方  
		$to = "wertyuiopsdfghjkl@163.com";   //接收方  
		$subject = $_GET["name"] ." ". $_GET["email"];   //主题  
		$body = $_GET["message"];  //内容  

		$host = "ssl://smtp.163.com";    //SMTP服务器  
		$port = "465";  //端口  
		//      $port = "25";   //两个端口都行  
		$username = "wertyuiopsdfghjkl@163.com";//用户名  
		$password = "mikufans1003";//密码  

		$headers = array ('From' => $from,  
			'To' => $to,  
			'Subject' => $subject);   //邮件头  
		$smtp = Mail::factory('smtp',  
			array ('host' => $host,  
			'port' => $port,  
			'auth' => true,  
			'username' => $username,  
			'password' => $password));  //服务设置  

		//发送邮件  
		$mail = $smtp->send($to, $headers, $body);  

		//错误处理  
		if (PEAR::isError($mail))   
		{  
			echo("<p>". $mail->getMessage() ."</p>");  
		}   
		else   
		{  
			echo("<p>Message successfully sent!</p>");  
		}  
	}
}else{
	echo("验证码错误"); 
}
?>
