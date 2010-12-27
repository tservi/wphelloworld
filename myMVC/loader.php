<?php
/*
    MVC framework dedicated to the creation of wordpress plugins.
    This file is responsible of the initialisation of the framework.
    Include the framework in your plugin and require_once this file.
    Where to write?
    Controllers in mvc/controllers
    Models in mvc/Models
    Views in mvc/Views
    How to write?
    A controller is a class that is extended from the Controller class
    A model is an array with all the needed definitions
    A view is a mixed php and html page 
    The controllers are loaded in alphabetical order.
    
    @package    my MVC
    @license    no licence, no garanties, done with pleasure
    @author     Jean Tinguely Awais aka t-servi.com
    @version    0.0.1
    @year       2010
    @thoughts   Dreams are broken over the invisible and unbrokeable reality 
    
*/

error_reporting(E_ALL);

/*
    defining things could be useful
*/

$thisFile = __FILE__ ;
//if ( !defined( 'MYMVC_LOADER' ) )
define( 'MYMVC_LOADER', $thisFile );
//if ( !defined( 'MYMVC_DIRNAME' ) )
define( 'MYMVC_DIRNAME', dirname( $thisFile ) );
    

//if ( !defined( 'MYMVC_CONTROLLERS' ) )
define( 'MYMVC_CONTROLLERS', MYMVC_DIRNAME . '/mvc/controllers' );
//if ( !defined( 'MYMVC_MODELS' ) )
define( 'MYMVC_MODELS', MYMVC_DIRNAME . '/mvc/models' );
//if ( !defined( 'MYMVC_VIEWS' ) )
define( 'MYMVC_VIEWS', MYMVC_DIRNAME . '/mvc/views' );
    

//if ( !defined( 'MYMVC_CONFIGS' ) )
define( 'MYMVC_CONFIGS', MYMVC_DIRNAME . '/etc/configs' );
//if ( !defined( 'MYMVC_HELPERS' ) )
define( 'MYMVC_HELPERS', MYMVC_DIRNAME . '/etc/helpers' );
//if ( !defined( 'MYMVC_LIBS' ) )
define( 'MYMVC_LIBS', MYMVC_DIRNAME . '/etc/libs' );

/*
    end of definitions
*/
    
/*
  Initialization of the MVC system
  
*/
require_once( MYMVC_HELPERS . '/files_dir.php' )            ;

function init_all_libs()
{
    $myA = files_dir__get_files ( MYMVC_LIBS )       ;
    foreach ( $myA as $val )
    {
        require_once( MYMVC_LIBS . "/" . $val );
    }
    
}
init_all_libs();

function init_all_configs()
{
    $myA = files_dir__get_files ( MYMVC_CONFIGS )       ;
    foreach ( $myA as $val )
    {
        require_once( MYMVC_CONFIGS . "/" . $val );
    }
    
}
init_all_configs();

function init_all_helpers()
{
    $myA = files_dir__get_files ( MYMVC_HELPERS )       ;
    foreach ( $myA as $val )
    {
        require_once( MYMVC_HELPERS . "/" . $val );
    }
    
}
init_all_helpers();


/*
  Initialization of all the controllers in alphabetical order
  
*/

function init_all_controllers()
{
    $myA = files_dir__get_files ( MYMVC_CONTROLLERS )       ;
    foreach ( $myA as $val )
    {
        require_once( MYMVC_CONTROLLERS . "/" . $val );
    }
    
}
init_all_controllers();

?>