<?php

class HelloWorld extends Controller
{
    function HelloWorld( )
    {
        parent::Controller( '', 'HelloWorld_frontpage.php' )                  ;
    }
    
    function say_hello()
    {
        return "Hello world!"                                               ;
    }
    
    
}

?>