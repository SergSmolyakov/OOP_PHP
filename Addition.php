<?php
class Addition
{
    private $arrayAddition=[
        'sugar',
        'milk',
        'cream',
    ];

    public function addAddition($addition){
        $this->arrayAddition[]=$addition;
    }

    public function getAddition($nameAddition){
        foreach ($this->arrayAddition as $numberAddition=>$addition){
            if (($nameAddition-1)==$numberAddition){
                return $addition;
            }
        }
    }
}