<?php

/**
 * Interface Bus1
 */
interface Bus
{
    /**
     * @return mixed
     */
    public function drive();
    /**
     * @return mixed
     */
    public function openDoor();

    /**
     * @return mixed
     */
    public function closeDoor();

    /**
     * @return mixed
     */
    public function goIn();

    /**
     * @return mixed
     */
    public function goOut();

    /**
     * @return mixed
     */
    public function wait();
}