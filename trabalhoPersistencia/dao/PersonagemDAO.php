<?php


require_once("modelo/Personagem.php");
require_once("modelo/PersonagemGuerreiro.php");
require_once("modelo/PersonagemMago.php");
require_once("util/Conexao.php");


    class PersonagemDAO{
      
        public function inserirCliente(Personagem $personagem){


            $sql = "INSERT INTO personagens 
                            (tipo, id, nomeJogador, nomePersonagem, forca, velocidade, ataque, arma, magia, cajado)
                            VALUES
                            (?, ?, ?, ?, ?, ?, ?)";

            $con = Conexao::getCon();

            $stm = $con->prepare($sql);
            if($personagem instanceof PersonagemMago) {

            
            $stm->execute(array($personagem->getTipo(),
                                $personagem->getId(),
                                $personagem->getNomeJogador(),
                                $personagem->getNomePersonagem(),
                                $personagem->getForca(),
                                $personagem->getVelocidade(),
                                null,
                                null,
                                $personagem->getMagia(),
                                $personagem->getCajado(),
                            ));

            } else if($personagem instanceof PersonagemGuerreiro) {
                $stm->execute(array(
                    $personagem->getTipo(),
                    $personagem->getId(),
                    $personagem->getNomeJogador(),
                    $personagem->getNomePersonagem(),
                    $personagem->getForca(),
                    $personagem->getVelocidade(),
                    $personagem->getAtaque(),
                    $personagem->getArma(),
                    NULL,
                    NULL,
            ));

            }
         }

         public function listarPersonagens(){
            $sql = "SELECT * FROM personagens";

            $con = Conexao::getCon();

            $stm = $con->prepare($sql);
            $stm->execute();
            $registros = $stm->fetchAll();

            $personagens = $this->mapPersonagem($registros);
            return $personagens;
        }

        public function buscarPorId(int $idPersonagem){
            $con = Conexao::getCon();

            $sql = "SELECT * FROM clientes WHERE id = ?";

            $stm = $con->prepare($sql);
            $stm->execute([$idPersonagem]);

            $registros = $stm->fetchAll();

            $personagens = $this->mapPersonagem($registros);
            if(count($personagens) > 0)
                return $personagens[0];
            else
                return null;
        

        }

        public function removerClientes(int $idPersonagem){
            $sql = " DELETE  FROM personagens  WHERE id = ?";

            $con = Conexao::getCon();

            $stm = $con->prepare($sql);
            $stm->execute([$idPersonagem]);

            $registros = $stm->fetchAll();

            $personagens = $this->mapPersonagem($registros);
            if(count($personagens) > 0)
                return $personagens[0];
            else
                return null;


        }





        private function mapPersonagem(array $registros){
            $personagens = array();
            foreach($registros as $reg){
                $personagem = null;
                if($reg['tipo']== 'F'){
                    $personagem = new PersonagemMago();
                    $personagem->setMagia($reg['magia']);
                    $personagem->setCajado($reg['cajado']);
                }else{
                    $personagem = new PersonagemGuerreiro();
                    $personagem->setAtaque($reg['ataque']);
                    $personagem->setArma($reg['arma']);
                };
                $personagem->setId($reg['id']);
                $personagem->setNomeJogador($reg['nomeJogador']);
                $personagem->setNomePersonagem($reg['nomePersonagem']);
                $personagem->setForca($reg['forca']);
                $personagem->setVelocidade($reg['velocidade']);
                array_push($personagens, $personagem);
            };
            return $personagens;
        }











    }