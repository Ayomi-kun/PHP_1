<?php
//once a function is created in a class it becomes a method.

    class Person{//creatting a class - Person
        function say_hello(){//creating a method 
            echo "Hello from inside the class ".get_class($this)."<br />";
            // get_ class($this)this just prints out the name of the class.
            // $this is the way we can refer to instances and call these instances inside the class...only inside the class 
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
    echo "<hr />";
    $person = new Person();


    $person->say_hello();
    echo "<hr />";
    
    class Human{
        var $first_name;
        var $last_name;

        var $arm_count = 2;
        //creating elements of this class
        var $leg_count = 2; 

    }
    $human = new Human();
    //creating an instance of the class
    //echo $human->arm_count."<br />";
    //  getting an element(variable in the class) from the class from the class through the object
    //no need for adding $ sign when refrencing a variable from the class 
    $human->arm_count=4;
    echo $human->arm_count."<br />";
    // this changes the default arm count of the object human instance to 4
    $human->first_name = "Idris";
    echo $human->first_name."<br />";

    $human2 = new Human();
    $human2->first_name = "Ayo";
    echo $human2->first_name."<br />";
    echo $human2 -> arm_count."<br />";
    

?>