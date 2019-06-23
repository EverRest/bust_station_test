<?php

/**
 * Class Bus
 */
class Bus implements BusInterface
{
    /**
     * const int
     */
    const SEATS = 40;
    /**
     * @var int
     */
    public $seats;
    /**
     * @var SomeRoute
     */
    public $route;
    /**
     * @var null
     */
    public $number = null;
    /**
     * Bus constructor.
     * @param SomeRoute $route
     */
    public function __construct( RouteInterface $route)
    {
        $this->seats = self::SEATS;
        $this->route = $route;
    }
    /**
     * @param int $passengersIn
     * @param int $passengersOut
     * @return mixed|void
     */
    public function openDoor(int $passengersIn = 0, int $passengersOut = 0)
    { 
        $this->goOut($passengersOut);
        $this->goIn($passengersIn);
    }
    /**
     * @return mixed
     */
    public function closeDoor()
    {
        $this->drive();
    }
    /**
     * @param int $people
     * @return mixed|void
     */
    public function goIn(int $people = 0)
    {
        if($people + $this->seats >= self::SEATS)
        {
            $this->seats = self::SEATS;
        } else {
            $this->wait();
        }
        $this->closeDoor();
    }
    /**
     * @param int $people
     * @return mixed|void
     */
    public function goOut(int $people = 0)
    {
        $this->seats += $people;
    }
    /**
     * @return mixed
     */
    protected function wait()
    {

    }
    /**
     * @return mixed
     */
    protected function drive()
    {
        $this->route->changeStation();
        $this->stop();
    }
    /**
     * @return mixed
     */
    protected function stop()
    {

    }
}