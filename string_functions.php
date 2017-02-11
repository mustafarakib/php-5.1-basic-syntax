<?php

$string = "Hello World! How's Life<br>";
    echo addslashes($string);

$myArr = array("Rohim","Korim","Jamal");
$myStr = implode('", "',$myArr);

$myStr = '"'.$myStr.'"';
    echo $myStr;

$myStr = "Rohim Korim Jamal";

$myArray = explode(" ",$myStr);
    echo "<pre>";
        print_r($myArray);
    echo "</pre>";

$myTutorial = '<br> means line break.';
    echo htmlentities($myTutorial);
    echo "<br>";

$username = " rahim ";
    echo $username;
    echo "<br>";

    echo trim($username);
    echo "<br><br>";


$myStr  = "Line1\nLine2\nLine3\n";
$myStr = nl2br($myStr);
    echo $myStr;
    echo "<br><br>";


//str_pad(string,length,pad_string,pad_type)
$myStr = "Hello World!";
    echo str_pad($myStr,100,$myStr). "<br>";
    echo str_repeat($myStr,5). "<br>";

$myStr = "BASIS Institute of Technology & Management";
    echo str_replace("o","x",$myStr)."<br>";

$myArr  = str_split($myStr,5);
    print_r($myArr);
    echo "<br><br>";


// substr_compare
$mainStr = "Hello World! How is life ?";
$str   = "How is";
    echo substr_compare($mainStr,$str,13)."<br>";

$mainStr = "Hello World! How is life? Hey you, How are you?";
$str   = "He";
    echo substr_count($mainStr,$str). "<br>";

$mainStr = "Hello World! How is life? Hey you, How are you?";
    echo substr_replace($mainStr,"How are you doing?",15)."<br>";

$mainStr = "hello world! how is life? hey you, how are you?";
    echo ucwords($mainStr);