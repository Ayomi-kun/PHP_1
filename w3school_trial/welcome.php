<html>
    <body>
        <!--this below will show the directory of the opened file!!-->
        <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
        <?php
        // api's will also be intigrated into the code - eventually.
        //define variables and set to empty values
        $first_name = $last_name = $username = $email =  $gender ="";
        // creating variables to handle error.
        $first_name_error = $last_name_error = $username_error = $email_error = $gender_error = "";

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }



      

      
        ?>

        Welcome <?php echo $first_name; ?><br>
        you will now be directed to the <?php echo $gender; ?> category<br>
        We will contact you on your email address: <?php echo $email; ?>

    </body>
</html>