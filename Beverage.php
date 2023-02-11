<?php
class Beverage
{
    private $arrayBeverage=[
        'coffee',
        'tea',
        'chocolate',
    ];
    public function addBeverage($beverage){
        $this->arrayBeverage[]=$beverage;
    }
    public function getBeverage($nameBeverage){
        foreach ($this->arrayBeverage as $numberBeverage=>$beverage){
            if (($nameBeverage-1)==$numberBeverage){
                return $beverage;
            }
        }
    }
}
