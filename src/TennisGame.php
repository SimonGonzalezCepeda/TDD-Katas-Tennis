<?php


class TennisGame
{

    /**
     * @var
     */
    protected $player2;

    /**
     * @var
     */
    protected $player1;

    /**
     * TennisGame constructor.
     * @param $player2
     * @param $player1
     */
    public function __construct($player2, $player1)
    {
        $this->player2 = $player2;
        $this->player1 = $player1;
    }

    /**
     * @return string
     */
    public function score()
    {

        if($this->player1->score() == $this->player2->score())

        return $player1->score() . ' - ' . $player2->score();
    }
}
