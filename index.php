<?php 

$botToken = "217392851:AAGqpP514p2cobsYFL1b-Jumx6NAsoueArk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$text = $updateArray["result"][0]["message"]["text"];
$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
//print_r($chatId);
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=spotaker");
?>