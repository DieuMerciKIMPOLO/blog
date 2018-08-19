<?php
namespace App\Utilities;

class Date{

    public function isWeedEnd(){
        return date('N')>=6;
    }
}
