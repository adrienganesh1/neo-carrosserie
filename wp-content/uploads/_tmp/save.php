<?php
// Temp helper: receives a data URL PNG and writes it next to this file.
$name = isset($_GET['n']) ? preg_replace('/[^a-zA-Z0-9_\-]/','',$_GET['n']) : 'out';
$raw = file_get_contents('php://input');
if (strpos($raw, 'base64,') !== false) $raw = substr($raw, strpos($raw,'base64,')+7);
$bin = base64_decode($raw);
if ($bin === false || strlen($bin) < 100) { http_response_code(400); echo 'bad'; exit; }
file_put_contents(__DIR__.'/'.$name.'.png', $bin);
echo 'ok '.strlen($bin);
