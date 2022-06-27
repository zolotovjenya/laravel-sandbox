<?php

namespace App\Classes\Sponsor\Factory;

use App\Classes\Sponsor\Data\Umbro;
use App\Classes\Sponsor\SponsorFactoryInterface;

class UmbroFactory implements SponsorFactoryInterface{
    protected $class;

    public function __construct(){
        $this->class = new Umbro();
    }

    public function getTitle(){
        return $this->class->getTitle();
    }

    public function getImage(){
        return $this->class->getImage();
    }
}
