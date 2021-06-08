<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='atanud662@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Pin :".$phone."\n"."Problam :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		      $prints =" <html>
                                  <h2> Thank You For Your Responce Now You Can Go Back And Explore More</h2>
                                  
                              </html>";
                  echo"$prints";
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>