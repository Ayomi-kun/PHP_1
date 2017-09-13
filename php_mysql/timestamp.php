<?php
    $date = time();
    $sec =  mktime(1,0,0,1,1,1970);//hour,minute,second,month,day,year
    echo $sec;
    echo "<br />";
    $num_of_sec = $sec / 60;
    echo "<br />";
    echo $num_of_sec; 
    // genarating the time date after inputing the number of seconds from 1970 january one till date





    echo "<br />";
    echo $date;//this turns the current time to seconds and sets 1970 as 00:00 seconds
  
    //to turn  seconds to actuall time stamp
    echo "<br />";
    echo "<br />";
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S" , $date);
    echo $mysql_datetime
    // this gives you a time stamp for a country that is 8 hours behind nigeria.
?>