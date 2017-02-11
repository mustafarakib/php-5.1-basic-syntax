<?php
  $x = 35;
  function doSomething(){
       $x = 50;
       $y = $GLOBALS['x'] + $x ;
       echo $y."<br>";
  }
  doSomething();

  echo $_SERVER['PHP_SELF']."<br>";
  echo $_SERVER['SERVER_NAME']."<br>";
  echo $_SERVER['REQUEST_METHOD']."<br>";
  echo $_SERVER['DOCUMENT_ROOT']."<br>";
  echo $_SERVER['SCRIPT_FILENAME']."<br>";
  echo $_SERVER['HTTP_REFERRER']."<br>";