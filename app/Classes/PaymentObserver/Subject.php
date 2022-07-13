<?php

namespace App\Classes\PaymentObserver;

class Subject implements \SplSubject
{
    public $payment;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        $data = [];

        $i=0;
        foreach ($this->observers as $observer) {
            $data[$i] = $observer->update($this);

            $i++;
        }

        return $data;
    }
}