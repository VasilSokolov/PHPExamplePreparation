<?php
$text = $_GET['text'];
$blacklist = $_GET['blacklist'];

$emailPattern = '/\b[A-Za-z0-9\-\_\+]+@[A-Za-z0-9\-\]+\.[A-Za-z0-9\-\.]+\b/';

$newText = preg_replace_callback($emailPattern, 'getReplacement', $text);

echo $newText;
function getReplacement($match){

    return str_repeat("*", strlen($match));
}