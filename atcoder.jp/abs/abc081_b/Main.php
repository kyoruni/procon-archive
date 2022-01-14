<?php
    $numberCount = str_replace(PHP_EOL, '', fgets(STDIN)); // 数値が何個あるか
    $numbers     = explode(" ", fgets(STDIN)); // 数値
    // 数値がない場合はここで終了
    if (!$numberCount) echo 0;
 
    $count = 0;
    while (true) {
        for ($i = 0; $i < $numberCount; $i++) {
            if ($numbers[$i] % 2 === 0) {
                // 偶数
                $numbers[$i] = $numbers[$i] / 2;
            } else {
                // 奇数
                echo $count;
                exit;
            }
        }
        $count++;
    }