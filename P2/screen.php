<html>
    <head>
        <title>Screen</title>
    </head>
    <body>
        <?php
            $_POST["width"];
            $_POST["height"];
            $_SERVER['HTTP_USER_AGENT'];
        ?>
        <h3>
            <?php 
                echo "Your Browser is : $browser";
            ?>
        </h3>
        <h3>
            <?php 
                echo "You are using a screen resolution of: $width x $hight";
            ?>
        </h3>
    </body>
</html>