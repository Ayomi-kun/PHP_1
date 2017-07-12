<!--in this file we will be linking up to a php file and usuing database to validate and create a login profilegit-->
<!--this file will also contain the major html file form and links-->
<!DOCTYPE>
<html>
    <head>
        <title> Login page </title>
        <link rel="stylsheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="frm">
            <form action="process.php" method="POST">

                <p>
                    <label>USERNAME:</label>
                    <input type="text" id="user" name="user" />
                </p>
                 <p>
                    <label>PASSWORD:</label>
                    <input type="password" id="pass" name="pass" />
                </p>
                 <p>
                    
                    <input type="submit" id="btn" value="login" />
                    
                </p>

            </form>
        </div>
    </body>
</html>