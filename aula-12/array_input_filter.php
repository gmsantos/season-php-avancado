<?php

$data = [
    'product_id'    => 'libgd<script>',
    'component'     => '8',
    'versions'      => '2.0.33',
    'testscalar'    => ['2', '23', '10', '12'],
    'testarray'     => '2',
];

$validationRules = [
    'product_id'   => FILTER_SANITIZE_ENCODED,
    'component'    => [
        'filter'    => FILTER_VALIDATE_INT,
        'flags'     => FILTER_REQUIRE_ARRAY, 
        'options'   => ['min_range' => 1, 'max_range' => 10]
    ],
    'versions'     => FILTER_SANITIZE_ENCODED,
    'doesnotexist' => FILTER_VALIDATE_INT,
    'testscalar'   => [
        'filter' => FILTER_VALIDATE_INT,
        'flags'  => FILTER_REQUIRE_SCALAR,
    ],
    'testarray'    => [
        'filter' => FILTER_VALIDATE_INT,
        'flags'  => FILTER_REQUIRE_ARRAY,
    ]
];

$myinputs = filter_var_array($data, $validationRules);

var_dump($myinputs);
