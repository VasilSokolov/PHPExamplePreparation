<?php

$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$fontSize = $_GET['fontSize'];
$fontStyle = $_GET['fontStyle'];

$cssStyle = "font-size:$fontSize;";
if ( $fontStyle == 'bold'){
    $cssStyle .= 'font-weight:bold;';
}
if ( $fontStyle == 'normal' || $fontStyle == 'italic'){
    $cssStyle .= "font-style:$fontStyle;";
}

echo "<p style=\"$cssStyle\"";