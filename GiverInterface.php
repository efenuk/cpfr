<?php

interface GiverInterface {

    /**
     * Return items that person have
     *
     * @return NormalItem|RadioactiveItem
     */
    public function give();

}