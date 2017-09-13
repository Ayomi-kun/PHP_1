<?php
    echo "SERVER DETAILS: <br />";
    echo "SERVER_PORT:  ". $_SERVER['SERVER_PORT']."<br />";
    echo "SERVER_ADDR:  ". $_SERVER['SERVER_ADDR']."<br />";
    echo "SERVER_NAME:  ". $_SERVER['SERVER_NAME']."<br />";
    echo "<br />";

    echo "PHP_SELF: ".$_SERVER['PHP_SELF']."<br />";
    //shows the file path after the localhost
    echo "<br />";
    echo "SCRIPT_FILENAME: ".$_SERVER['SCRIPT_FILENAME']."<br />";
    //shows the file path from the root directory
    echo "<br />";

    echo "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT']."<br />";
    //shows the browser type and the type of O.S
    echo "<br />";
?>
