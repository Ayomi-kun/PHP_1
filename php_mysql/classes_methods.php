<?php
//once a function is created in a class it becomes a method.

    class Person{//creatting a class - Person
        function say_hello(){//creating a method 
            echo "Hello from inside a class.<br />";
        }
    }

    $methods = get_class_methods('person');//get_class_method - gets all the methods in a class
    foreach($methods as $method){// traversing through the gotten methods and printing them out
        echo $method."<br />";
    }
    if(method_exists('person','say_hello')) {// tis is just to check if a said methods exist in a class
        echo "Method exists";
    } 
    else{
        echo "Method does not exist.<br />";
    }
?>