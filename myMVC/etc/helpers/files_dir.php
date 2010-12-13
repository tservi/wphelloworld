<?php

/*
 
    Helper that is used for the manipulation of files and directories
    
    @package    my MVC
    @license    no licence, no garanties, done with pleasure
    @author     Jean Tinguely Awais aka t-servi.com
    @version    0.0.1
    @year       2010
    @thoughts   Dreams are broken over the invisible and unbrokeable reality 
    
*/



function files_dir__listdir( $dirpath )
{
    $ret = array()                                      ;
    if($handle = opendir( $dirpath ))
        {
	while (false !== ($file = readdir($handle)))
	{
            array_push( $ret, $file )                   ;
        }    
    }
    return $ret                                         ;
}

function files_dir__exclude( $dirpath )
{
    $DirExcluded = array ( "." , ".." , ".svn" )        ;
    $ret = array()                                      ;
    $myA = files_dir__listdir( $dirpath )               ;
    foreach( $myA as $val )
    {
        $include = true                                 ;
        foreach ($DirExcluded as $v )
        {
            if ( $val == $v)
                { $include = false ; }
        }
        if ($include)
            { array_push
                (
                $ret    ,  
                array(
                      $val ,
                      is_file( $dirpath . "/" . $val ) ,
                      is_dir( $dirpath . "/" . $val )
                      )
                ) ;
            }
    }
    return $ret                                         ;
}

function files_dir__get_files( $dirpath )
{
    $ret = array()                                      ;
    $myA = files_dir__exclude( $dirpath )               ;
    foreach ( $myA as $val )
    {
        if( $val[ 1 ] )
            { array_push ( $ret , $val[ 0 ] ) ; }
    }
    return $ret                                         ;
}


function files_dir__get_dirs( $dirpath )
{
    $ret = array()                                      ;
    $myA = files_dir__exclude( $dirpath )               ;
    foreach ( $myA as $val )
    {
        if( $val[ 2 ] )
            { array_push ( $ret , $val[ 0 ] ) ; }
    }
    return $ret                                         ;
}

?>