<?php
class Volume
{
    private $arrayVolume=[
        50,
        100,
        150,
        200,
    ];
    public function addVolume($volume){
        $this->arrayVolume[]=$volume;
    }
    public function getVolume($volumeBeverage){
        foreach ($this->arrayVolume as $numberVolume=>$volume){
            if (($volumeBeverage-1)==$numberVolume){
                return $volume;
            }
        }
    }
}