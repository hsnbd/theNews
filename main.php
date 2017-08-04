<?php

//its infinite loop without loop
function hello(){
    print("hello");

    if(hello() == "hello")
        print("hello");
}

hello();
?>
