<?php

namespace App;
define("BITM","BITM - BASIS Institute of Technology and Management");
define("VALUE", 100);

echo BITM ."<br>". VALUE ."<br>". __LINE__ ."<br>". __FILE__."<br>"."<br>" ;


function doSomething(){
    echo __FUNCTION__."<br>";
}
doSomething();
    echo __NAMESPACE__."<br>"."<br>";


$a = 420;
$b = 249;
$c = 73;

if(($a>$c)  && ($b>$a)){
    echo "C=$c is the smallest number";
}
if( ($a<$b) || ($b>$c)){
    echo "hello world!";
}