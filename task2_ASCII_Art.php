<?php
/*
ASCII art allows you to represent forms by using characters. To be precise, in our case, these forms are words. For example, the word "MANHATTAN" could be displayed as follows in ASCII art:
# #  #  ### # #  #  ### ###  #  ###
### # # # # # # # #  #   #  # # # #
### ### # # ### ###  #   #  ### # #
# # # # # # # # # #  #   #  # # # #
# # # # # # # # # #  #   #  # # # #

​Your mission is to write a program that can display a line of text in ASCII art.

INPUT:
Line 1: the width L of a letter represented in ASCII art. All letters are the same width.
Line 2: the height H of a letter represented in ASCII art. All letters are the same height.
Line 3: The line of text T, composed of N ASCII characters.
Following Lines: the string of characters ABCDEFGHIJKLMNOPQRSTUVWXYZ? Represented in ASCII art.
 
OUTPUT:
The text T in ASCII art.
The characters a to z are shown in ASCII art by their equivalent in upper case.
The characters which are not in the intervals [a-z] or [A-Z] will be shown as a question mark in ASCII art.
 
CONSTRAINTS :
0 < L < 30
0 < H < 30
0 < N < 200

*/
fscanf(STDIN, "%d", $lg_car);
fscanf(STDIN, "%d", $h_car);

$txt = strtoupper(fgets(STDIN));
$lg_txt = strlen($txt) - 1;

for ( $i = 0 ; $i < $h_car ; $i++ )
{
 $Line_car[$i] = fgets(STDIN );

 $Chaine = "";

 for ($j = 0; $j < $lg_txt ; $j++ )
 {
    $car = substr($txt, $j, 1);
    $ASCI_car = ord($car);
  
    if ( $ASCI_car < 65 or $ASCI_car > 90 )
    {
      $pos_car = 26 * $lg_car;
    }
    else
    {
     $pos_car = ( $ASCI_car - 65 ) * $lg_car;
    }
  
    $Chaine .= substr($Line_car[$i], $pos_car, $lg_car);
  }

 fputs( STDOUT, $Chaine."\n" );
}
