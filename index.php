<?php
require_once 'Beverage.php';
require_once 'Addition.php';
require_once 'Volume.php';
require_once 'BeverageTemperature.php';
echo 'Введите номер напитка:'.'<br>'.' 1-Coffee'.'<br>'.' 2-Tea'.'<br>'.' 3-Chocolate '.'<br>';
echo 'Введите номер добавки:'.'<br>'.' 1-Sugar'.'<br>'.' 2-Milk'.'<br>'.' 3-Cream'.'<br>'.' 0-No addition'.'<br>';
echo 'Введите объем напитка:'.'<br>'.' 1-50'.'<br>'.' 2-100'.'<br>'.' 3-150'.'<br>'.' 3-200'.'<br>';
echo 'Введите температуру напитка:'.'<br>'.' 1-Hot(90 degree)'.'<br>'.' 2-Warm(70 degree)'.'<br>'.' 3-Cold(50 degree) '.'<br>';
class VendingMachine
{
    private $beverageName;
    private $additionName;
    private $volumeBeverage;
    private $temperatureBeverage;
    public function __construct(){
    $this->beverageName=new Beverage;
    $this->volumeBeverage=new Volume;
    $this->additionName=new Addition;
    $this->temperatureBeverage=new BeverageTemperature;
    }

    public function getProduct($nameBeverage,$nameAddition,$volumeBeverage,$temperatureBeverage){
    return 'Ваш напиток '.$this->beverageName->getBeverage($nameBeverage).' с добавлением '.$this->additionName->getAddition($nameAddition).' объемом '.$this->volumeBeverage->getVolume($volumeBeverage).' температурой '.$this->temperatureBeverage->getTemperature($temperatureBeverage);
}

}
$prod=new VendingMachine();
echo $prod->getProduct(1,1,3,2);

