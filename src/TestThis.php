<?php

class UserName
{
    private $name;

    /**
     * UserName constructor.
     * 使用了 $this.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
    }

    /**
     * 使用了 $this.
     *
     * @author ROVAST
     */
    public function printName()
    {
        echo $this->name.PHP_EOL;
    }
}

$nameObject = new UserName('Jack');
$nameObject->printName(); // 指向 $nameObject->name，为 Jack

$nameObject2 = new UserName('Rose');
$nameObject2->printName(); // 指向 $nameObject2->name，为 Rose

/*
 * $this 指向实例化好的对象
 * 两次实例化的对象不同，所以 $this 指向的对象也不同
 * 以至于输出了两次结果
 */
