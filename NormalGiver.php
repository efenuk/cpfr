<?php

class NormalGiver implements GiverInterface, FinderInterface {

    /**
     * @var NormalItem
     */
    protected $item;

    /**
     * Normal giver have normal item
     */
    public function __construct(){
        $this->item = new NormalItem();
    }

    /**
     * But sometimes he can find some items
     * @param ItemInterface $item
     */
    public function find(ItemInterface $item) {
        $this->item = $item;
    }

    /**
     * Give what he have
     *
     * @return NormalItem|RadioactiveItem
     */
    public function give() {
        return $this->item;
    }

}