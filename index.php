<?php

    class User {

        // properties methods
        public $username = 'Mark';

        public function showMessage() {
            return "$this->username is ma name";
        }

    }

    $userOne = new User();

    echo $userOne->showMessage();

    // // echo get_class($userOne);
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP oop tutorial</title>
    </head>
    <body>

    </body>
</html>