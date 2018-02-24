<?php
phpinfo();
$to 		= "santhosh.your@gmail.com";
				$subject 	= "Hi!";
				$body 		= "Hi,\n\nHow are you?";
				var_dump(mail($to, $subject, $body));
				if (mail($to, $subject, $body)) {
					echo "SUCCESS";
				} else {
				//echo("<p>Email delivery failed…</p>");
				}
?>