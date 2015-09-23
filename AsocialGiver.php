<?php

class AsocialGiver implements GiverInterface {

    public $isDrunk = false;

    public function give() {
        return ($this->isDrunk)?new RadioactiveItem():new NormalItem();
    }

    public function getDrunk() {
        $this->isDrunk = true;
    }

}