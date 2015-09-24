<?php

class RadioactiveItem implements ItemInterface {

    /**
     * Radioactive item has a bad quality
     *
     * @return bool
     */
    public function isGood() {
        return false;
    }

}