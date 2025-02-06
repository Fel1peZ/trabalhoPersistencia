<?php 

    require_once("Personagem.php");

    class PersonagemMago extends Personagem{

        private int $magia;
        private string $cajado;

     public function getTipo(){
        return "M";
     }


        /**
         * Get the value of magia
         */
        public function getMagia(): int
        {
                return $this->magia;
        }

        /**
         * Set the value of magia
         */
        public function setMagia(int $magia): self
        {
                $this->magia = $magia;

                return $this;
        }

        /**
         * Get the value of cajado
         */
        public function getCajado(): string
        {
                return $this->cajado;
        }

        /**
         * Set the value of cajado
         */
        public function setCajado(string $cajado): self
        {
                $this->cajado = $cajado;

                return $this;
        }
    }