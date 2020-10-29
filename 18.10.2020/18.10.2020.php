<?php
//задача 1
$x = -3;
if ($x <= -2 && $x >= 1) {
    echo "true";
} else {
    echo "false";
}
//задача 2
$x = 0;
if ($x <= -2 or $x >= 1 ) {
    echo "true";
} else {
    echo "false";
}

//задача 3
$x = 0;
if ($x <= -2 or $x >= 1 && $x <= 3) {
    echo "true";
} else {
    echo "false";
}

// 4a

$x = -2;
$y = 1;
$fun = 0.5*$x+1;
if ($fun=$y) {
    echo "true";
} else {
    echo "false";
}

// 4b

$x = -2;
$fun = 0.5 * $x + 1;
if ($y >= $fun) {
    echo "true";
} else {
    echo "false";
}


$arr = [
    'Shop' =>
        ['mobile' => [
            'xiaomi' => [
                'price' => '100$',
                'stock' => 'yes',
            ],
            'samsung' => [
                'price' => '150$',
                'stock' => 'yes',
            ],
        ]
        ],
    ['TV' => [
        'LG' => [
            'price' => '200$',
            'stock' => 'yes',
        ],
        'Thomson' => [
            'price' => '180$',
            'stock' => 'yes',
        ],
    ]
    ],
];
if ($arr['mobile']['samsung']['stock'] = 'yes')
    echo $arr['mobile']['samsung']['price'];
