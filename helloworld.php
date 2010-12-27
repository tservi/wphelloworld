<?php
/**
 * WordPress plugin "Hello World Extended" main file, responsible for initiating the plugin
 *
 * @package Hello World Extended
 * @author Jean Tinguely Awais
 * @version 0.1
 */

/*
Plugin Name: Hello World Extended
Plugin URI: https://code.google.com/p/wphelloworld/
Description: Put instances of Hello World in your posts
Version: 0.1
Author: Jean Tinguely Awais.
Author URI: http://www.t-servi.com
License: Artistic licence version 2 as seen on http://bit.ly/1Mq0Vp
*/

/*
 
    Copyright 2010 Jean Tinguely Awais ( email: info@t-servi.com )
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of :

        the Artistic License version 2.0,
    
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See either
    the GNU General Public License or the Artistic License for more details.

    You should have received a copy of the Artistic License with this Kit,
    in the file named "Artistic.clarified".  If not, you can see these one
    http://www.opensource.org/licenses/artistic-license-2.0.php

 
*/

/*

    interessant readings :
    http://codex.wordpress.org/Writing_a_Plugin

*/


/**
 * Define certain plugin variables as constants
 */


/**
 * What the wp system shows to non registred users
 */


require_once( 'myMVC/loader.php' )                              ;

function hello_world($data){    
        global $post                                            ;
        $hw = new HelloWorld();
        echo $hw -> trigger_view();
        return $data                                            ;
}

function activate_hello_world(){
        global $post;
        add_filter('the_content', 'hello_world', 10);
        add_filter('the_excerpt', 'hello_world', 10);
}

activate_hello_world();

/*
 How to create a widget from my plugin?
*/
register_sidebar_widget('Hello world Widget',
    'hello_world');


?>
