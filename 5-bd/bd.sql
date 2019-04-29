-- 1. Criar Banco de Dados: CREATE DATABASE
-- CREATE DATABASE AreaAdm;
/*USE AreaAdm;

-- 2. Criar Tabelas: CREATE TABLE
-- Table de Perfis
CREATE TABLE perfis (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome_perfil VARCHAR(50),
    aprovar_cadastro TINYINT(1),
    desativar_usuario TINYINT(1),
    permissao_ativar_pagina TINYINT(1),
    permissao_edicao_artigo TINYINT(1),
    permissao_edicao_img TINYINT(1),
    permissao_criar_perfil TINYINT(1),
    perfil_ativo TINYINT(1)
);

-- SUPERADMIN
INSERT INTO perfis VALUE 
(null, "super", 1, 1, 1, 1, 1, 1, 1);*/

-- Tabela de usuários com superadmin
CREATE TABLE usuarios (
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_perfil INT,
    email VARCHAR(50),
    senha VARCHAR(9),
	ativo TINYINT(1),
	CONSTRAINT fk_id_perfil FOREIGN KEY (id_perfil) 
    REFERENCES perfis(id)
);

INSERT INTO usuarios VALUE
(null, 1, "superadmin", "taatuotec", 1);

