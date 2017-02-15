<?php

$client = new SoapClient('http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL');

try {

    var_dump($client->__getFunctions());
    var_dump($client->__getTypes());

    $resposta = $client->CalcPrazo([
        'nCdServico' => '40010', // Sedex
        'sCepOrigem' => '12235360', // CEP Origem
        'sCepDestino' => '04690000', // Cep Destino
    ]);

    var_dump($resposta->CalcPrazoResult->Servicos);

} catch (SoapFault $e) {
    echo $e->getMessage();
}

