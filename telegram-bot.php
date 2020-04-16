<?php
/* tested: 16/04/2020 */
class telegram_bot{
var $botToken = null;
var $channelUsername = null;

function connect($array){
$this->botToken = $array[0];
$this->channelUsername = $array[1];
}

function send($message){
$username = "@" . $this->channelUsername;
$url = "https://api.telegram.org/bot" . $this->botToken . "/" . "sendMessage?chat_id=" . $username . "&text=" . urlencode($message);
if(file_get_contents($url)){
return true;
    }
  }
}
