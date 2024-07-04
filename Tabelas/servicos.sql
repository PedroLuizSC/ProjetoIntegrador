DROP DATABASE IF EXISTS db_servico;

-- Definicao de banco db_servico
CREATE DATABASE IF NOT EXISTS db_servico  
    CHARACTER SET = 'utf8'
    COLLATE = 'utf8_general_ci';

DROP TABLE IF EXISTS db_servico.servicos;

CREATE TABLE IF NOT EXISTS db_servico.servicos(
id INTEGER AUTO_INCREMENT PRIMARY KEY,
Profissional VARCHAR(40) NOT NULL,
descricaoServico TEXT,
Prazo DATE, 
ate DATE,
prioridade INTEGER(1),
Valor DECIMAL
);

-- INSERT INTO db_servicos.servicos (Profissional, descricaoServico, Prazo, prioridade, Valor)
-- VALUES ("Rafael Cruz", "Pintura de faixadas", "2024/10/05", "2", 50 )
