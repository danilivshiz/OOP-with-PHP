<?php

interface IElectronicPart{
    public function getSpecs();
}

class ElectronicPart implements IElectronicPart
{
  private $manufacturer;
  private $price;
  private $model;
 
 public function __construct($manufacturer,$price,$model){
    $this->manufacturer=$manufacturer;
    $this->price=$price;
    $this->model=$model;
 }

 public function getSpecs(){
    return  $this->manufacturer .' '.$this->price .' '.$this->model;
 }

}
     
     class Screen extends ElectronicPart implements IElectronicPart
  { 
      private $size;
      private $panel;
 
  public function __construct($manufacturer,$price,$model,$size,$panel){
    $this->manufacturer=$manufacturer;
    $this->price=$price;
    $this->model=$model;
    $this->size=$size;
    $this->panel=$panel;
    
 }
   public function getSpecs(){
    return $this->manufacturer .' '.$this->price .' '.$this->model .' '.$this->size .' '.$this->panel ;
   }
  }
class Mouse extends ElectronicPart implements IElectronicPart
 {
   private $isWired;
 
   public function __construct($manufacturer,$price,$model,$isWired){
    $this->manufacturer=$manufacturer;
    $this->price=$price;
    $this->model=$model;
    $this->isWired=$isWired;
 }
  public function getSpecs(){
    return $this->manufacturer .' '.$this->price .' '.$this->model.' '.$this->isWired; 
    
  }
 }
 class Keyboard extends ElectronicPart implements IElectronicPart
 {
   private $isWired;
 
   public function __construct($manufacturer,$price,$model,$isWired){
    $this->manufacturer=$manufacturer;
    $this->price=$price;
    $this->model=$model;
    $this->isWired=$isWired;
 }
  public function getSpecs(){
    return $this->manufacturer .' '.$this->price .' '.$this->model.' '.$this->isWired; 
    
  }
 }

 class Computer extends ElectronicPart implements IElectronicPart
 {
    private $motherboard;
    private $processor;
    private $hardDrive;
    private $ram;
    private $graphicCard;
 
   public function __construct($manufacturer,$price,$model,$motherboard,$processor,$hardDrive,$ram,$graphicCard){
    $this->manufacturer=$manufacturer;
    $this->price=$price;
    $this->model=$model;   
    $this->motherboard=$motherboard;
    $this->processor=$processor;
    $this->hardDrive=$hardDrive;
    $this->ram=$ram;
    $this->graphicCard=$graphicCard;
 }
  public function getSpecs(){
    return $this->manufacturer .' '.$this->price .' '.$this->model.' '.$this->motherboard .' '.$this->processor .' '.$this->hardDrive.' '.$this->ram.' '.$this->graphicCard; 
    
  }
 }


$Electronic=new ElectronicPart('manufacturer : Samsung ,', 'model:S24F350FH, ', 'Price: 723.');
$Scre=new Screen('manufacturer : Samsung ,', 'model:S24F350FH, ', 'Price: 723.',' size:15 ',' panel : super ');
$Mou=new Mouse('manufacturer : Samsung ,', 'model:S24F350FH, ', 'Price: 725.','isWired: is Wired');
$Keyboa=new Keyboard('manufacturer : Samsung ,', 'model:S24F350FH, ', 'Price: 725.','isWired: is Wired');
$Comp=new Computer('manufacturer : Samsung ,', 'model:S24F350FH, ', 'Price: 723.','motherboard,','processor,','hardDrive,','ram,','graphicCard');

echo 'class name is : ElectronicPart , '.$Electronic->getSpecs();
echo '<br>'.'class name is :Screen , '.$Scre->getSpecs();
echo '<br>'.'class name is :Mouse , '.$Mou->getSpecs();
echo '<br>'.'class name is :Keyboard , '.$Keyboa->getSpecs();
echo '<br>'.'class name is :Computer , '.$Comp->getSpecs();


?>
