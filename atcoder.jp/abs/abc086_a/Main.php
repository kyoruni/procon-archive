<?php
$num = explode(" ", fgets(STDIN));
$result =  ($num[0] * $num[1]) % 2 ? 'Odd' : 'Even';
echo $result;