<?php

$user_phone = htmlspecialchars($_POST["userphone"], ENT_QUOTES, 'UTF-8');

$token = "8061504938:AAE4l7u6hkXJysgg7Ka1L6F7MtdutCxdhuw";
$chat_id = "-4691831124";

$text = "📱 <b>Телефон:</b> " . htmlspecialchars($user_phone);

$url = "https://api.telegram.org/bot{$token}/sendMessage";
$params = [
    'chat_id' => $chat_id,
    'text' => $text,
    'parse_mode' => 'HTML'
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($params)
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Проверка результата
if ($response) {
    echo "Success";
} else {
    echo "Error";
}
