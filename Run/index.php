<?php
/**
 * Created by PhpStorm.
 * User: ZHANGZIJUN364
 * Date: 2015/9/30
 * Time: 15:10
 */
include_once(__DIR__ . '/../vendor/autoload.php');

if (!class_exists('PHPUnit_Framework_TestCase')) {
    exit('can not find phpunit.');
} else {
    echo 'congratulation on your first step.';
}

