<?php

/**
 * Class TestSelf
 */
class TestSelf
{
    private static $firstCount = 0;
    private $lastCount = 0;

    public function __construct()
    {
        $this->lastCount = ++self::$firstCount; // self 指向当前的类，多次实例化后会多次执行
    }

    public function printLastCount()
    {
        print($this->lastCount . PHP_EOL);
    }
}

$countObject =  new TestSelf();
$countObject->printLastCount(); // 1

$countObject2 =  new TestSelf();
$countObject2->printLastCount(); // 2

/**
 * self 指向当前的类，所以每次实例化需要走构造函数，所以每次 new 都会 + 1
 */
