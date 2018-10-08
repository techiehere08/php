				*****************
				** Sending sms **
				**     in      **  
				**  php using  **
				** way2sms API **
				*****************
<?php
$mobile="Reciever's number";
$message="Your message";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=user_sign_in_number&Password=account_password&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=your_way2sms_account_api_key") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>
         
