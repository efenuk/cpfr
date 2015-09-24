<?php

interface FinderInterface {
    /**
     * Let some peoples find items
     *
     * @param ItemInterface $item
     */
    public function find(ItemInterface $item);
}