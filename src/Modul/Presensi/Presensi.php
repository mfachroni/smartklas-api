<?php

namespace Smartklas\Modul\Presensi;

class Presensi {
    private $tipe;
    
    public function __construct($tipe){
        $this->tipe = $tipe;
    }

    public function get(){
        return $tipe;
    }
}