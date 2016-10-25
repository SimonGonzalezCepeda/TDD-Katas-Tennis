<?php

class Player
{
    /**
     * @var array
     */
    protected $code = [
        0 => "0",
        1 => "15",
        2 => "30",
        4 => "40"
    ];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $points;

    /**
     * Player constructor.
     * @param $name
     * @param $score
     */
    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    /**
     *
     */
    public function winPoint()
    {
        $this->points += 1;
    }

    /**
     * @return mixed
     */
    public function points()
    {
        return $this->points;
    }

    /**
     * @return mixed
     */
    public function score()
    {
        return $this->points;
    }

    public function name()
    {
        return $this->name;
    }
}