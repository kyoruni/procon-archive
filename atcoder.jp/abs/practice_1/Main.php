<?php
$a = fgets(STDIN);
$b = explode(" ", fgets(STDIN));
$s = fgets(STDIN);
echo $a+$b[0]+$b[1] . " {$s}";