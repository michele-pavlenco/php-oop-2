<?php 
class User{
    protected $name;
    protected $surname;
    //protected $email;

    function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
       // $this->email = $_email;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    //public function getEmail(){
    //    return $this->email;
    //}
    public function setName($_name){
        $this->name = $_name;
    }
    public function setSurname($_surname){
        $this->surname = $_surname;
    }
    //public function setEmail($_email){
    //    $this->email = $_email;
    //}

}

?>