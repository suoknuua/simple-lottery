<?php
header('Content-Type: application/json;charset=utf-8');

class Lotto{

    private $LotteryNumbers;
    private $Matches;

    public function randomizer(){

        do{
            $Num = rand(1,39);
            $RandNumbers[] = $Num;
            $UniqueNumbers = array_unique($RandNumbers);
        } while (count($UniqueNumbers) < 5);
        
        sort($UniqueNumbers);
        
        $this->LotteryNumbers = $UniqueNumbers;
        return $this->LotteryNumbers;
    }

    public function yourNum($first, $second, $third, $fourth, $fifth){

        $yourNumbers = array($first, $second, $third, $fourth, $fifth);

        sort($yourNumbers);

        print_r($yourNumbers);
        print_r($this->randomizer());

        $this->Matches = 0;

        foreach($yourNumbers as $y){
            if(in_array($y, $this->LotteryNumbers)){
                 $this->Matches++;
            }
        }
        return "You got ".$this->Matches. " numbers correct!";
    }
}

$lottery = new Lotto();
echo $lottery->yourNum('1','4','3','5','2');