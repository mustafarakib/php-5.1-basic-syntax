<?php

//boolean example start here
   $decision = true;
   if($decision){
       echo "The decision is True!<br><br>";
   }
   $decision = false;
   if($decision){
       echo "The decision is False!<br><br>";
   }
//boolean example end here


//Integer & Float example start here
   $value1  = 100;    // integer
   $value2  = 55.35;  // float
//Integer $ Float example end here


// string example start here
 $myString1 = 'abcd1234#$% $value1';
 $myString2 = "abcd1234#$% $value1";
     echo $myString1 . "<br>";
     echo $myString2 . "<br>"."<br>";

$heredocString =<<<BITM
    heredoc line1  $value1 <br>
    heredoc line2  $value1 <br><br>
BITM;
    echo $heredocString;

$nowdocString =<<<'BITM'
    nowdoc line1  $value1 <br>
    nowdoc line2  $value1 <br><br>
BITM;
    echo $nowdocString;
// string example end here


// Array example start here
   $indexedArray = array(1,2,3,4,5,6,7,8,9);
   print_r($indexedArray);
        echo "<br>";

   $indexedArray = array("Toyota","BMW",3,5.7,"Jaguar","Nissan","Ford");
   print_r($indexedArray);
        echo "<br>";

   $ageArray = array("Rahim"=>23, "Moynar Ma"=>57, "Kuddus"=>35, "Abul"=>36);
        print_r($ageArray);
        echo "<br>";

   $ageArray['Moynar Ma'] = 34;
        echo($ageArray['Moynar Ma']);

   echo "<pre>";
      print_r($ageArray);
   echo "</pre>";
// Array example end here


   $amiTumiShe = "nobody";
        echo $amiTumiShe;