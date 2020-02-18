<?php
namespace Smartklas;

class SmartklasApi {
    
    private $apiKey;
    private $URL = "https://www.smartklas.com/api/sync";

    public function __construct($options){
        $this->apiKey = $options['key'];
    }

    public function getKey(){
        return $this->apiKey;
    }


}