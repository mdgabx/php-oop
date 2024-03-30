<?php

    class User {

        // properties methods
        public $username = 'Mark';

    }

    $userOne = new User();

    echo $userOne->username;

    // echo get_class($userOne);
    print_r(get_class_vars('User'));
    print_r(get_class_methods('User'));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP oop tutorial</title>
    </head>
    <body>

    </body>
</html>