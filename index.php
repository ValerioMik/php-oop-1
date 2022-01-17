<!-- GOAL: 
   /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */ -->

  <?php
    class Films{
        public $titolo;
        public $sottotitolo;
        public $registra;

        public function __construct($titolo){
            return $this-> titolo = $titolo;
        }

        public function getFullTitle(){
            if ($this->sottotitolo){
                return $this->titolo.":". $this->sottotitolo;
            }else{
               return $this->titolo;
            }
        }

        public function __toString(){
           if ($this->registra){
               return $this->getFullTitle()."|".$this->registra;
           }else{
               return $this->getFullTitle()."|"."???";
           }
        }
    }

    $film1 = new Films("Matrix");
    $film2 = new Films("Fantozzi 2");
    $film3 = new Films("Peter Pan");

    
    $film2-> sottotitolo = "il ritorno di fantozzi";
    $film3-> registra = "Robin Budd";
    $film3-> sottotitolo= "il ritorno all'isola che non c'e'";

    echo $film1 -> __toString()."<br>";
    echo $film2 -> __toString()."<br>";
    echo $film3 -> __toString()."<br>";

  ?>