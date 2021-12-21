<?php

/* https://api.telegram.org/bot5034447044:AAEl8B_ygm7EycyQegJ2gNn9D16cSKlHr7Q/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$topic = $_POST['user_topic'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];
$token = "5034447044:AAEl8B_ygm7EycyQegJ2gNn9D16cSKlHr7Q";
$chat_id = "-739129851";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email,
  'Тема:' => $topic,
  'Текст:' => $text,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  header('Location: error.htm');;
}
?>