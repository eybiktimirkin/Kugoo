<?php

$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8061504938:AAE4l7u6hkXJysgg7Ka1L6F7MtdutCxdhuw";
$chat_id = "-4691831124";

$formData = array (
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

forEach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}