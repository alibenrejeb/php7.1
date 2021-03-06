<?php

declare(strict_types=1);

$b = 'Bar';

$mySecondFunction = function (string $string=null) : ?string {
    return $string ? strtoupper($string) : null;
};

$myFunction = function ($a) use ($b, $mySecondFunction) {
    echo $mySecondFunction();
    echo $mySecondFunction($a . ' ' . $b) . PHP_EOL;
};

$myFunction('Foo');

$total = 0;

$myThirdFunction = function (int $value) {
    return $value;
};

var_dump($myThirdFunction('5'));

class A {
    function b($var) {
        return $var;
    }
    static function c($var) {
        
    }
    function __invoke()
    {
        
    }
}

$instance = new A;
$bCallable = [$instance, 'b'];
$cCallable = ['A', 'c'];
$dCallable = $instance;
$instance();

