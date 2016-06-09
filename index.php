<?php 

$botToken = "236216584:AAHjRADsR3CmjpmtoduThokg5_onH-PXxs4";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);
?>