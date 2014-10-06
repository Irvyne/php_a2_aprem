<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$recursion = [
    'cars' => [
        'france' => [
            'renault' => [
                'clio',
                'twingo' => [
                    2012,
                    2013,
                    2014,
                ],
            ],
            'peugeot' => [
                206,
                207,
            ],
            'citroen' => [
                'ds3',
                'ds4',
                'ds6',
            ],
        ],
        'germany' => [
            'porsche' => [
                911,
            ],
        ],
    ],
];

// DRY Don't Repeat Yourself 
function recursion($array) {
    echo '<ul>';
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    echo '<li>'.$key;
                    recursion($value);
                    echo '</li>';
                } else {
                    echo '<li>'.$value.'</li>';
                }
            }
        } else {
            echo '<li>'.$array.'</li>';
        }
    echo '</ul>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php recursion($recursion); ?>
</body>
</html>