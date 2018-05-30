<?php error_reporting(0);
$subject = $_POST["subject"];
$mail1 = $_POST["address1"];
$message = $_POST["message"];
mail($mail1, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
if($_POST["check1"] == true){
	$mail2 = $_POST["address2"];
	mail($mail2, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
	if($_POST["check2"] == true){
		$mail3 = $_POST["address3"];
		mail($mail3, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
		if($_POST["check3"] == true){
			$mail4 = $_POST["address4"];
			mail($mail4, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
			if($_POST["check4"] == true){
				$mail5 = $_POST["address5"];
				mail($mail5, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
				if($_POST["check5"] == true){
					$mail6 = $_POST["address6"];
					mail($mail6, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
					if($_POST["check6"] == true){
						$mail7 = $_POST["address7"];
						mail($mail7, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
						if($_POST["check7"] == true){
							$mail8 = $_POST["address8"];
							mail($mail8, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
							if($_POST["check8"] == true){
								$mail9 = $_POST["address9"];
								mail($mail9, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
								if($_POST["check9"] == true){
								$mail10 = $_POST["address10"];
								mail($mail10, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");
								}
							}
						}
					}
				}
			}
		}
	}
}
echo("<p>Your all messages was sent successfully</p>");
echo("<a href='index.php'>Send more:)</a>");