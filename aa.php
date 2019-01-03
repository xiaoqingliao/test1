<?php
/**
 * Created by PhpStorm.
 * User: 97038
 * Date: 2019/1/3
 * Time: 10:36
 */
$arr = [7=>'0.04762',8=>'0.92857',12=>'0.02381'];
asort($arr);
$a = $arr;
echo json_encode($a);