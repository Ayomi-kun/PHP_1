<html>
    <body>
        <!--this below will show the directory of the opened file!!-->
        <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
        <?php
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $middle_name = $_POST["middle_name"];
            $email = $_POST["email"];

        ?>

        Welcome <?php echo $first_name; ?><br>
        Your email address is: <?php echo $email; ?>

    </body>
</html>