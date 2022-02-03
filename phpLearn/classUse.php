<?php

class Room
{
    public $color = 'red';

    public function colorEcho()
    {
        echo $this->color;
    }

    public function colorChange($colorIn)
    {
        $this->color = $colorIn;
    }
}

class Room2
{
    public static $location = 'House in';

    public static function sayWelCome()
    {
        echo 'Hi';
    }
}

echo Room2::$location;
Room2::sayWelCome();

$objRoom = new Room2();

echo $objRoom::$location;

$objRoom::sayWelCome();

class Room3
{
    public static $location = 'House in';

    public static function locationChange($location)
    {
        self::$location = $location;
    }

    private $color = 'REd';

    public function colorSet($color)
    {
        $this->color = $color;
    }

    public function colorGet($color)
    {
        return $this->color;
    }

}

$oRoom3 = new Room3();
$oRoom3->colorSet('Green');
$oRoom3->colorGet();

// Ключевые слова $ this self:: static::
// 1.	Для обращения к объекту или классу внутри класса используются псевдонимы $this, self::, static::
// 2.	$this - это псевдоним текущего объекта внутри класса
// 3.	self:: - псевдоним класса, внутри которого выполняется метод
// 4.	static:: - псевдоним класса, с объектом которого мы работаем в данный момент (позднее статическое связывание)

class Magic
{
    public function __construct()
    {
        echo 'Created';
    }

    public function __invoke()
    {
        echo 'Function';
    }

    public function __toString()
    {
        echo 'Function';
    }
}

$oMagic = new Magic();
$oMagic();

echo $oMagic;
