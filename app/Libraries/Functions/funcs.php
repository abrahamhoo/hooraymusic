<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13
 * Time: 10:39
 */

function p()
{
    $argvs = func_get_args();
    echo '<div style="text-align: left;">';
    foreach ($argvs as $k => $v) {
        echo "<xmp>";
        print_r($v);
        echo "</xmp>";
    }
    echo '</div>';
}