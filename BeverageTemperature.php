<?php
class BeverageTemperature
{
    private $arrayTemperature=[
        'hot',
        'warm',
        'cold',
    ];
    public function getTemperature($temperatureBeverage){
        foreach ($this->arrayTemperature as $nameTemperature=>$temperatureCelsium){
            if (($temperatureBeverage-1)==$nameTemperature){
                return $temperatureCelsium;
            }
        }
    }
}