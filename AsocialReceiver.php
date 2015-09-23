<?php

class AsocialReceiver implements ReceiverInterface {

    public $isDrunk = false;

    public function receive(ItemInterface $item) {
        return $item;
    }

    public function getDrunk() {
        $this->isDrunk = true;
    }

}