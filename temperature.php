<?php

    class Weather {

        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFahrenheit ($c) {
            return $c * 9 / 5 + 32;   
        }

        public static function determineTempCondition ($f) {
                if ($f < 40) {
                    return self::$tempConditions[0];
                } else if ($f < 65) { 
                    return self::$tempConditions[1];
                } else {
                    return self::$tempConditions[2];
                }
        }
    }

    $weatherInstance = new Weather();

    // print_r($weatherInstance->tempConditions);

    // print_r(Weather::$tempConditions);

    echo Weather::determineTempCondition(89);
?>

<html>
    <head>
        <title>OOP</title>
    </head>
    <body>

    </body>
</html>