<?php

namespace App\Classes\Sponsor\Factory;

use App\Classes\Sponsor\Data\Huawei;
use App\Classes\Sponsor\SponsorFactoryInterface;

class HuaweiFactory implements SponsorFactoryInterface{
    protected $class;

    public function __construct(){
        $this->class = new Huawei();
    }

    public function getTitle(){
        return $this->class->getTitle();
    }

    public function getImage(){
        return $this->class->getImage();
    }
}
