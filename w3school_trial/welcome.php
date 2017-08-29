<html>
    <body>
        <!--this below will show the directory of the opened file!!-->
        <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
        <?php
        //define variables and set to empty values
        $first_name = $last_name = $middle_name = $email = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
                $first_name = test_input($_POST["first_name"]);
                $last_name = test_input($_POST["last_name"]);
                $middle_name = test_input($_POST["middle_name"]);
                $email = test_input($_POST["email"]);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

        Welcome <?php echo $first_name; ?><br>
        We will contact you on your email address: <?php echo $email; ?>

    </body>
</html>