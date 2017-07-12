<html>
    <body>
        <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><br>
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>

    </body>
</html>