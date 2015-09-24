<?php

class AsocialGiver implements GiverInterface, DrunkerInterface {

    /**
     * Asocial giver not always drunk
     *
     * @var bool
     */
    public $isDrunk = false;

    /**
     * Asocial can both normal and radioactive items (when drunk)
     *
     * @return NormalItem|RadioactiveItem
     */
    public function give() {
        return ($this->isDrunk)?new RadioactiveItem():new NormalItem();
    }

    /**
     *
     * This is how he drunk
     */
    public function drunk() {
        $this->isDrunk = true;
    }

}