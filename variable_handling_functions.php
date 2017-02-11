<?php

$var = 'The122.34343The';
$float_value_of_var = floatval($var);
    echo $float_value_of_var; // 122.34343
    echo "<br>";


$var= "";
if(empty($var)){
    echo '$var is empty';
}
else{
    echo '$var is not empty';
}
echo "<br>";


$var = array(1,2,3,4,5,6);
if(is_array($var)){
    echo '$var is an array';
}
else{
    echo '$var is not an array';
}
echo "<br>"."<br>";


$strSerialize = serialize($var);
    echo $strSerialize;
    echo "<br>";
$newVar =  unserialize($strSerialize);
    print_r($newVar);
    echo "<br>"."<br>";


var_dump($var);
    echo "<br>";

var_export($var);
    echo "<br>";
    echo gettype($var); echo "<br>";

unset($var);
    print_r($var);


$a = false;
$b = 0;

// Since $chat-b44 is chat-b44 boolean, it will return true
if (is_bool($a) === true) {
    echo "Yes, this is chat-b44 boolean"; echo "<br>";
}

// Since $b is not chat-b44 boolean, it will return false
if (is_bool($b) === false) {
    echo "No, this is not chat-b44 boolean"; echo "<br>"."<br>";
}

class myClass{
    public $x;
}
var_dump(boolval(new myClass));