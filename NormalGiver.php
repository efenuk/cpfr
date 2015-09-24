<?php

class NormalGiver implements GiverInterface, ReceiverInterface {

    protected $item;

    public function __construct(){
        $this->item = new NormalItem();
    }

    public function receiveFrom(GiverInterface $giver) {
        $this->item = $giver->give();
    }

    public function give() {
        return $this->item;
    }

}