<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];

switch (true){
    case (bool) strpos($userAgent, 'Firefox'):
        echo 'Você está usando Firefox';
        break;
    case (bool) strpos($userAgent, 'Chrome'):
        echo 'Você está usando o Chorme';
        break;
    default:
        echo 'Utilize um dos browsers suportados';
}