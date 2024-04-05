<?php

    class User {

        // properties methods
        public $username;
        private $email;


        public function __construct($username, $email)
        {
            $this->username =  $username;
            $this->email = $email;
        }

        public function showMessage() 
        {
            return "$this->username is ma name" . "$this->email";
        }

        //getter

        public function getEmail() {
            return $this->email;
        }

        //setter
        public function setEmail($email) {
            if(strpos($email, '@') > -1) 
            {
                $this->email = $email;
            }
        }

    }



    // // echo get_class($userOne);
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));


    class AdminUser extends User {
        
        public $level;

        public function __construct($username, $email, $level)
        {
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }

    $userOne = new User('username', 'helo@world.com');

    $userOne->setEmail('ad@gmail.com');

   
    $userThree = new AdminUser('yoshi', 'test@gmail.com', 5);

    echo $userThree->username;
    echo $userThree->getEmail();
    echo $userThree->level;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP oop tutorial</title>
    </head>
    <body>

    </body>
</html>