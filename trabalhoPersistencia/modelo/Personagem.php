<?php

    abstract class Personagem{


        protected int $id;
        protected string $nomeJogador;
        protected string $nomePersonagem;
        protected string $forca;
        protected string $velocidade;

        public abstract function getTipo();



        /**
         * Get the value of id
         */
        public function getId(): int
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId(int $id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nomeJogador
         */
        public function getNomeJogador(): string
        {
                return $this->nomeJogador;
        }

        /**
         * Set the value of nomeJogador
         */
        public function setNomeJogador(string $nomeJogador): self
        {
                $this->nomeJogador = $nomeJogador;

                return $this;
        }

        /**
         * Get the value of nomePersonagem
         */
        public function getNomePersonagem(): string
        {
                return $this->nomePersonagem;
        }

        /**
         * Set the value of nomePersonagem
         */
        public function setNomePersonagem(string $nomePersonagem): self
        {
                $this->nomePersonagem = $nomePersonagem;

                return $this;
        }

        /**
         * Get the value of forca
         */
        public function getForca(): string
        {
                return $this->forca;
        }

        /**
         * Set the value of forca
         */
        public function setForca(string $forca): self
        {
                $this->forca = $forca;

                return $this;
        }

        /**
         * Get the value of velocidade
         */
        public function getVelocidade(): string
        {
                return $this->velocidade;
        }

        /**
         * Set the value of velocidade
         */
        public function setVelocidade(string $velocidade): self
        {
                $this->velocidade = $velocidade;

                return $this;
        }
    }