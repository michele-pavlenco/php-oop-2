<?php
require_once __DIR__.'/users.php';
class PrimeAccounts extends User{
    protected $sale;
    
    public function getSale(){
        return $this->sale;
    }
    public function setSale($_sale){
        $this->sale = $_sale;
    }
} 
?>