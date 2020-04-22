<?php

function WinningNumbers(){

    $numbers = [];

    while(count($numbers) <= 4){
        $rand = rand(1,39);
        if(!in_array($rand, $numbers)){
            $numbers[] += $rand;
        }
    }

    return $numbers;
}

function Lottery($first, $second, $third, $fourth, $fifth){

    $yourNumbers = array($first, $second, $third, $fourth, $fifth);

    $winningNumbers = WinningNumbers();

    $Matches = 0;

    foreach($yourNumbers as $y){
        if(in_array($y, $winningNumbers)){
            $Matches++;
        }
    }
    return $Matches;
}

$result = Lottery(1,4,3,5,2);
echo "You had {$result} matches!";
