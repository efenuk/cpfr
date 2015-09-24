<?php

class NormalItem implements ItemInterface {

    /**
     * Normal item has a good quality
     *
     * @return bool
     */
    public function isGood() {
        return true;
    }

}