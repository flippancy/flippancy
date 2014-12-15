<?php
/**
 * 获得随机数
 * @param  $length 随机长度
 * @return string
 */
function randomkeys($length)
{
    $returnStr = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for ($i = 0; $i < $length; $i++) {
        $returnStr .= $pattern{mt_rand(0, 61)}; //生成php随机数
    }
    return $returnStr;
}

/**
 *显示数组函数
 *@param
 *@return
 */
function p($array)
{
    dump($array, 1, '<pre>', 0);
}