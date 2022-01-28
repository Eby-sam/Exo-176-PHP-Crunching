<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
$nbrMax15 = 0;
$nbrMaxW = 0;
$nbrMaxQ = 0;

echo "il y a  ". count($dico).  " mos dans les dictionnaire.txt" ."<br>";
for($i=0; $i < count($dico); $i++){
    if(strlen($dico[$i]) === 16){
        $nbrMax15++;
    }
    if(strpos($dico[$i], "w")){
        $nbrMaxW++;
    }
    if(strrpos($dico[$i], "q") === strlen($dico[$i]) - 2){
        $nbrMaxQ++;
    }
}
echo  $nbrMax15."<br>";
echo $nbrMaxW."<br>";
echo $nbrMaxQ."<br>";
