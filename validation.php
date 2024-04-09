<?php

    require('user_validator.php');

    if(isset($_POST['submit'])) {

        $validation = new UserValidator($_POST);

        $errors = $validation->validateForm();
    }
?>

<html>
    <head>
        <title>Validation</title>
    </head>
    <body>
        <div class="user">
            <h2>Form league</h2>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <label>Username: </label>
                <input type="text" name="username" value="<?= htmlspecialchars($_POST['username']) ?? '' ?>"/>
                <div class="error">
                    <?= $errors['username'] ?? '' ?>
                </div>

                <label>email: </label>
                <input type="text" name="email" value="<?= htmlspecialchars($_POST['email']) ?? '' ?>" />
                <div class="error">
                    <?= $errors['email'] ?? '' ?>
                </div>

                <input type="submit" value="submit" name="submit" >
            </form>
        </div>
    </body>
</html>