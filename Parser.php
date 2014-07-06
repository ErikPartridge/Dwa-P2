<?php
/**
 * Erik Malmstrom-Partridge
 */

$password = "";

/*
 * Get the list of words as an array
 */
function getArray(){

    $file = fopen("dictionary.txt", "rb");

    $count = 0;

    // How many entries
    while($input = fgets($file) !==  false){
        $count++;
    }
    rewind($file);
    // Fill empty array @TODO
    $array = array_fill(0, $count -1, "");
    $count = 0;

    // Fill array with words
    while(!feof($file)){
        $input = fgets($file);
        $array[$count] = trim($input);
        $count++;
    }
    fclose($file);
    return $array;
}

function randomWord(){
    // Get list of words
    $array = getArray();
    $count = count($array);
    $access = rand(0, $count);
    //Get random word
    return $array[$access];
}

function getPassword($entries, $number = false, $upper = false, $symbol = false ){
    $specialChars = array(0 => "!", 1 => "@", 2 => "#", 3 => "$", 4 => "%", 5 => "&", 6 => "+", 7 => "?");
    $result = "";
    for($i = 0; $i < $entries; $i++){
        $result = $result.randomWord();
    }
    if($number){
        $num = rand(0,9);
        $result = $result.$num;
    }
    if($symbol){
        $result = $result.$specialChars[rand(0,7)];
    }
    if($upper){
        $result = strtoupper(substr($result, 0,1)).substr($result, 1, strlen($result)-1);
    }
    return $result;
}
?>