<?php

$headerTime = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) : time();
$time = 1465434412;

if ($headerTime > $time) {
    header('304 Not Modified', true, 304);
    exit;
}

header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time() ) . ' GMT');
