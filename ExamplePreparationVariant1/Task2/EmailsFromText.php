<?php
$text = $_GET['text'];
$blacklist = $_GET['blacklist'];

$emailPattern = '/[A-Za-z0-9\-\_\+]+@[A-Za-z0-9\-\]+\.[A-Za-z0-9\-\.]/';

$preg_match_all($emailPattern, $text,
);