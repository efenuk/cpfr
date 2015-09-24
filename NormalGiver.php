<?php

class NormalGiver implements GiverInterface, ReceiverInterface {

    protected $item;

    public function __construct(){
        $this->item = new NormalItem();
    }

    public function receive(ItemInterface $item) {
        $this->item = $item;
    }

    public function give() {
        return $this->item;
    }

}