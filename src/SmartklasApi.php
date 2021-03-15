<?php
namespace Smartklas;

use GuzzleHttp\Client;
use Smartklas\Modul;

class SmartklasApi
{

    private $apiKey;
    private $URL = "https://www.smartklas.com/api/sync";
    private $client;

    public function __construct($options)
    {
        $this->apiKey = $options['key'];
        $this->client = new Client([
            'base_uri' => $this->URL,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$this->apiKey,
                ]
        ]);
    }

    public function modul($modul, $option){
        if($modul == "presensi"){
            if($option == "ptk"){
                return new \Smartklas\Modul\Presensi\PresensiPTK($this->client);
            }
        }
    }

}
