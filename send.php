<?php error_reporting(0);
$subject = $_POST["subject"];
$mail1 = $_POST["address1"];
$message = $_POST["message"];
mail($mail1, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
for($i = 1; $i <= 9; $i++){
	if($_POST["check".$i] == true){
		$iPlus = $i+1;
		$mail2 = $_POST["address".$iPlus];
		mail($mail2, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
	}
}
echo("<p>Your all messages was sent successfully</p>");
echo("<a href='index.php'>Send more:)</a>");