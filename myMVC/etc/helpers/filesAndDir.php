<?php

function dirlist( $dirpath )
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

?>