<?php

    if(isset($_POST['submit'])) {
        echo 'form submitted';
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
                <input type="text" name="username" />

                <label>email: </label>
                <input type="text" name="email" />

                <input type="submit" value="submit" name="submit" >
            </form>
        </div>
    </body>
</html>