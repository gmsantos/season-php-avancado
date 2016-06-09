<?php

ob_start();

echo 'Olá';

echo '13';

$saida = ob_get_clean();

echo 765;
echo strtoupper($saida);

