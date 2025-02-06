<?php

require_once("modelo/Personagem.php");
require_once("modelo/PersonagemGuerreiro.php");
require_once("modelo/PersonagemMago.php");
require_once("dao/PersonagemDAO.php");


do {


    echo "\n----------CADASTRO DE CLIENTES-----\n";
    echo "1- Cadastrar Personagem Mago\n";
    echo "2- Cadastrar Personagem Guerreiro\n";
    echo "3- Listar Personagem \n";
    echo "4- Buscar Personagem \n";
    echo "5- Excluir Personage\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {

        case 1:
            
            break;
        case 2:
           
            break;
        case 3:
            


            break;
        case 4:
           
            break;
        case 5:
            
            break;
        case 0:
          
            break;
    }
} while ($opcao != 0);
