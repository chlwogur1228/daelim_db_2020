<?php
$filename = "../";//상위폴더
$filename .= "resource/layout.html";

//함수

$body = file_get_contents($filename);

$header = file_get_contents("../resource/header.html");

$body = str_replace("{{header}}",$header,$body);



$footer = file_get_contents("../resource/footer.html");

$body = str_replace("{{footer}}",$footer,$body);

function main($filename, $body) 
{

//코드를 함수로 만들거에요
$footer = file_get_contents($filename);
$body = str_replace("{{main}}",$footer,$body);

return $body;
}

$body = main("../resource/main.html",$body);
echo $body;

