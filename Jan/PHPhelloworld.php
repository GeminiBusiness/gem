<?php
$letters = "A, S, R, Z";
$letter_list = explode(",",  $letters);
print "the letter is $letter_list[2]";
echo ' of ';
echo implode(' ',$letter_list);
//
?> 
