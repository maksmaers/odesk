<?php

/*

Each defibrillator is represented by the following fields:

    A number identifying the defibrillator
    Name
    Adress
    Contact Phone number
    Longitude (degrees)
    Latitude (degrees)

These fields are separated by a semicolon ;
 
DISTANCE
The distance d between two points A and B will be calculated using the following formula:
​
Note: In this formula, the latitudes and longitudes are expressed in radians. 6371 corresponds to the radius of the earth in km.

The program will display the name of the defibrillator located the closest to the user’s position. This position is given as input to the program.
 
INPUT:
Line 1: User's longitude (in degrees)
Line 2: User's latitude (in degrees)
Line 3: The number N of defibrillators located in the streets of Montpellier
N lignes suivantes : N lines describing each defibrilator
 
OUTPUT:
The name of the defibrillator located the closest to the user’s position.
 
CONSTRAINTS :
0 < N < 10000
 
EXAMPLE :
Input
3,879483
43,608177
3
1;Maison de la Prevention Sante;6 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217
2;Hotel de Ville;1 place Georges Freche 34267 Montpellier;;3,89652239197876;43,5987299452849
3;Zoo de Lunaret;50 avenue Agropolis 34090 Mtp;;3,87388031141133;43,6395872778854
Output
Maison de la Prevention Sante


*/

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $q);
$mime = [];
for ($x=0;$x<$n;$x++) {
    $line = explode(' ', rtrim(fgets(STDIN), "\n"));
    $mime[strtolower($line[0])] = $line[1];
}
for ($x=0;$x<$q;$x++) {
    $tab = explode('.', rtrim(fgets(STDIN), "\n"));
    $ext = (count($tab) > 1) ? strtolower(end($tab)) : "";
    echo (array_key_exists($ext, $mime)) ? $mime[$ext] : "UNKNOWN";
    echo "\n";
}
?>
