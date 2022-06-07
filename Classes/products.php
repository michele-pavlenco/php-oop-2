<?php  
class Products{
    protected $name;
    protected $brand;
    protected $type;
    protected $price;

    function __construct($_name, $_brand, $_type, $_price){
        $this->name = $_name;
        $this->brand = $_brand;
        $this->type = $_type;
        $this->price = $_price;
    }
    public function getName(){
        return $this->name;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function setType($_type){
        $this->type = $_type;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }

}

?>