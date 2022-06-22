<?php
class departments {
    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $website;
    public $head_of_department;

    function __construct($_id,$_name) {
        $this -> id = $_id;
        $this -> name = $_name;
    }
    
   public function setDepartmentInfo($_address,$_phone,$_email,$_website){
        $this -> address = $_address;
        $this -> phone = $_phone;
        $this -> email = $_email;
        $this -> website = $_website;
    }
    
    function getInfo(){
        return ["indirizzo" => $this->address, "telefono" => $this->phone, "email" => $this->email, "sito" => $this->website];
    }
}


?>