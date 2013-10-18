<?php

/*

INPUT:
Line 1: the number n of stock values available.
Line 2: the stock values arranged in order, from the date of their introduction on the stock market v1 until the last known value vn. The values are integers.
 
OUTPUT:
The maximal loss p, , expressed negatively if there is a loss, otherwise 0.
 
CONSTRAINTS:
0 < n < 100000
0 < v < 231
 
EXAMPLE 1:
Input
6
3 2 4 2 1 5
*/

fscanf(STDIN, "%d", $n);
$tab = explode(' ', rtrim(fgets(STDIN), "\n"));
$maxi = $tab[0];
$perte = 0;
for ($x=1;$x<$n;$x++) {
    if ($maxi - $tab[$x] > $perte)
        $perte = $maxi - $tab[$x];
    if ($tab[$x] > $maxi)
        $maxi = $tab[$x];
}
echo (-$perte)."\n";
?>
