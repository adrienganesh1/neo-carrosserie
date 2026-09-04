<?php
/**
 * Proxy first-party pour Google Analytics 4 (Measurement Protocol).
 * Recoit les hits envoyes par gtag.js via transport_url (meme origine que
 * le site), puis les relaie serveur-a-serveur vers Google. Contourne les
 * bloqueurs de pub cote navigateur, qui ciblent le domaine google-analytics.com
 * mais pas le domaine du site visite.
 */

ignore_user_abort(true);

http_response_code(204);
header('Content-Length: 0');
header('Connection: close');

if (function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
} else {
    ob_start();
    header('Content-Length: 0');
    ob_end_flush();
    flush();
}

$query = $_SERVER['QUERY_STRING'] ?? '';
$body = file_get_contents('php://input');
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

$ch = curl_init('https://region1.google-analytics.com/g/collect?' . $query);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $body,
    CURLOPT_HTTPHEADER => [
        'User-Agent: ' . $ua,
        'X-Forwarded-For: ' . $ip,
        'Content-Type: text/plain;charset=UTF-8',
    ],
    CURLOPT_TIMEOUT => 3,
    CURLOPT_CONNECTTIMEOUT => 2,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => true,
]);
curl_exec($ch);
curl_close($ch);
