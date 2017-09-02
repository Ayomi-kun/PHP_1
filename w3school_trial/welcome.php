<html>
    <body>
        <!--this below will show the directory of the opened file!!-->
        <!--<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
        <?php
        // api's will also be intigrated into the code - eventually.
        //define variables and set to empty values
        $first_name = $last_name = $middle_name = $email =  $gender ="";
        // creating variables to handle error.
        $first_name_error = $last_name_error = $middle_name_error = $email_error = $gender_error = "";

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $middle_name = $_POST["middle_name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }



        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($first_name)){
                $first_name_error = "Name is required";
            }else{
                $first_name = test_input($first_name);
            }
            if(empty($last_name)){
                $last_name_error = "last name is required";
            }else{
                $last_name = test_input($last_name);
            }
            if(empty($middle_name)){
                $middle_name = "";
            }else{
                $middle_name = test_input($middle_name);
            }
            if(empty($email)){
                $email_error = "Email required";
            }else{
                $email = test_input($email);
            }
            if(empty($gender)){
                $gender_error = "please select the gender of your type";
            }else{
                $gender = test_input($gender);
            }
        }

      
        ?>

        Welcome <?php echo $first_name; ?><br>
        you will now be directed to the <?php echo $gender; ?> category<br>
        We will contact you on your email address: <?php echo $email; ?>

    </body>
</html>