<?php 
 class Request3{
    private $values;
    private $company_name;

    public function __construct(){
        $this->values = array("SERVICES", "ABOUT", "WORK", "PRICING", "FAQ´S", "CAREERS", "CONTACT");
        $this->company_name = ["DINGUS", "&ZAZZY"];
    }

    public function getValues(){
        return $this->values;
    }

    public function getCompanyName(){
        return $this->company_name;
    }
}

?>