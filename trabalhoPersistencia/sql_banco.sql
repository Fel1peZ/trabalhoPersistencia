
CREATE TABLE personagens(
    id int AUTO_INCREMENT NOT NULL,
    tipo varchar(1) NOT NULL,
    nomeJogador varchar(70) NOT NULL,
    nomePersonagem varchar(70) NOT NULL,
    forca varchar(70) NOT NULL,
    velocidade varchar(70),
    ataque varchar(70),
    arma varchar(70),
    cajado varchar(70),
    magia varchar(70),
    PRIMARY KEY (id)
);

