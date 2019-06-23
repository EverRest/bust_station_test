<?php

/**
 * Interface Bus1
 */
interface BusInterface
{
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
}