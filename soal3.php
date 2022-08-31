<?php

/*
 * Complete the 'isBalanced' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function isBalanced($s) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = isBalanced($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
