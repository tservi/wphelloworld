<?php

class HelloWorld extends Controller
{
    function HelloWorld( )
    {
        /* here is where to implement the logic */
        parent::Controller( '', 'HelloWorld_frontpage.php' )                  ;
    }
    
    /* It's possible to define functions, but is it usefull? */
    function say_hello()
    {
        return "Hello world!"                                               ;
    }
       
}

?>