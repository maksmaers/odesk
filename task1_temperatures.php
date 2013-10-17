<?php
fscanf(STDIN, "%d", $n);

$listofvalue = fgets( STDIN );
$temp_min = 5526;

$temp = explode( " " , $listofvalue );

if ( $n == 0 or $n == "" )
{ 
    $temp_out = 0;
}
else
{
    for ( $i = 0 ; $i < $n ; $i++ )
    { 
        if ( abs( $temp[$i] ) <= $temp_min )
        {
            $temp_min = abs( $temp[$i] );
            $temp_out = $temp[$i];
        }

        if ( $temp[$i] == abs($temp_out) )
        { 
            $temp_out = $temp[$i]; 
        }
    }
}

fputs( STDOUT , $temp_out );


?>
