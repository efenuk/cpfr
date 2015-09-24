<?php

class AlienGiver implements GiverInterface {

    /**
     * Alien giver can only give radioactive items
     *
     * @return RadioactiveItem
     */
    public function give() {
        return new RadioactiveItem();
    }

}