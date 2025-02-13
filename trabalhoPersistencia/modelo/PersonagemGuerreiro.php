<?php

    require_once("Personagem.php");

    class PersonagemGuerreiro extends Personagem {

        private int $ataque;
        private string $arma;



        public function getTipo(){
            return "G";
        }


        /**
         * Get the value of ataque
         */
        public function getAtaque(): int
        {
                return $this->ataque;
        }

        /**
         * Set the value of ataque
         */
        public function setAtaque(int $ataque): self
        {
                $this->ataque = $ataque;

                return $this;
        }

        /**
         * Get the value of arma
         */
        public function getArma(): string
        {
                return $this->arma;
        }

        /**
         * Set the value of arma
         */
        public function setArma(string $arma): self
        {
                $this->arma = $arma;

                return $this;
        }
    }