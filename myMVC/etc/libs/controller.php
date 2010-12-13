<?php


class Controller
{

/*
 what is a controller ?
 It's a programm that makes logical operations,
 can load options ( from wp ), load models and trigger views
 Options, models and views are stored in arrays. 
*/

var $model      = ''        ;
var $view       = ''        ;
var $options    = array()   ; 

function Controller( $model = '' , $view = '' , $options = array() )
{
    $this->model    = $model   ;
    $this->view     = $view    ;
    $this->options  = $options ;
}

function load_options ( )
{
    if ( count ( $this -> options ) > 0 )
    { /* to do */ }
}

function load_model ( )
{
    if ( $this -> model != '' )
    { /* to do */ }
}

function trigger_view ( )
{
    if ( file_exists( MYMVC_VIEWS . "/" . $this -> view ) )
        { include ( MYMVC_VIEWS . "/" . $this -> view ) ;}
}


    
}




?>