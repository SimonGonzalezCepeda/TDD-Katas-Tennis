<?php


/**
 * Class TennisGame
 */
class TennisGame
{
    /**
     * @var
     */
    protected $player1;

    /**
     * @var
     */
    protected $player2;

    /**
     * TennisGame constructor.
     * @param $player2
     * @param $player1
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * @return string
     */
    public function score()
    {
        if($this->player1->score() >3 || $this->player2->score() >3){
            $diferencia = $this->player1->score() - $this->player2->score();
            if($diferencia > 0){
                return "Avantatge" . $this->player1->name();
            }
            if($diferencia == 0){
                return "Iguals";
            }
            if($diferencia < 0){
                return "Avantatge" . $this->player2->name();
            }
        }

        if($this->player1->score() == $this->player2->score()){
            return $this->player1->score(). ' - Igual';
        }

        return $this->player1->score() . ' - ' . $this->player2->score();
    }
}
