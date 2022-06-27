<?php

namespace App\Classes\Sponsor\Factory;

use App\Classes\Sponsor\Data\Heineken;
use App\Classes\Sponsor\SponsorFactoryInterface;

class HienekenFactory implements SponsorFactoryInterface{
    protected $class;

    public function __construct(){
        $this->class = new Heineken();
    }

    public function getTitle(){
        return $this->class->getTitle();
    }

    public function getImage(){
        return $this->class->getImage();
    }
}
