<?php 

$botToken = "236216584:AAHjRADsR3CmjpmtoduThokg5_onH-PXxs4";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

//$text = $updateArray["result"][0]["message"]["text"];
$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
print_r($chatId);
//file_get_contents($website."/sendmessage?chat_id=".$chatId."$text=spotaker lu!");
?>