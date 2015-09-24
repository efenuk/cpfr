<?php

class NormalGiver implements GiverInterface, FinderInterface {

    protected $item;

    public function __construct(){
        $this->item = new NormalItem();
    }

    public function find(ItemInterface $item) {
        $this->item = $item;
    }

    public function give() {
        return $this->item;
    }

}