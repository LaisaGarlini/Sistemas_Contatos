# Sistemas_Contatos

Sistema desenvolvido para cadastro de pessoas e contatos.
Foi utilizado as seguintes tecnologias PHP, HTML, CSS, JavaScript e PostgreSQL.

Na primeira e única página há duas tabelas que listam os dados das tabelas "pessoa" e "contatos". 
Em cima delas há um campo para pesquisa e um botão para cadastro dos mesmos.
Na tabela temos o evento de doubleclick, que abre um modal para realizar a edição ou excluir o registro que foi clicado.

Algumas dificuldades encontradas foram no momento de atualiza, excluir e adicionar registros. 
O comando em sql seria tranquilo de fazer porém não tenho conhecimento de como e em que momento 
fazer isso no código, pesquisei sobre AJAX porém não consegui compreender muito bem.


//Create da tabela "pessoa"
CREATE TABLE IF NOT EXISTS public.pessoa
(
    id bigint NOT NULL,
    nome character varying(50) COLLATE pg_catalog."default" NOT NULL,
    cpf character varying(14) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT pessoa_pkey PRIMARY KEY (id)
)

//Create da tabela "contato"
CREATE TABLE IF NOT EXISTS public.contato
(
    id bigint NOT NULL,
    tipo character varying(10) COLLATE pg_catalog."default" NOT NULL,
    descricao character varying(50) COLLATE pg_catalog."default" NOT NULL,
    id_pessoa bigint NOT NULL,
    CONSTRAINT contato_pkey PRIMARY KEY (id),
    CONSTRAINT fk_contato_pessoa FOREIGN KEY (id_pessoa)
        REFERENCES public.pessoa (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

//Insert da tabela "pessoa"
INSERT INTO pessoa (id, nome, cpf)
VALUES
(1, 'João da Silva', '111.111.111-11'),
(2, 'Maria Oliveira', '222.222.222-22'),
(3, 'Pedro Santos', '333.333.333-33'),
(4, 'Ana Souza', '444.444.444-44'),
(5, 'Lucas Ferreira', '555.555.555-55'),
(6, 'Juliana Costa', '666.666.666-66'),
(7, 'Roberto Almeida', '777.777.777-77'),
(8, 'Mariana Pereira', '888.888.888-88'),
(9, 'Fernando Castro', '999.999.999-99'),
(10, 'Carla Martins', '000.000.000-00'),
(11, 'Ricardo Mendes', '123.456.789-10'),
(12, 'Larissa Gomes', '234.567.890-12'),
(13, 'Henrique Campos', '345.678.901-23'),
(14, 'Cristina Lima', '456.789.012-34'),
(15, 'Felipe Silva', '567.890.123-45'),
(16, 'Natália Santos', '678.901.234-56'),
(17, 'Alexandre Souza', '789.012.345-67'),
(18, 'Fernanda Alves', '890.123.456-78'),
(19, 'Daniel Pereira', '901.234.567-89'),
(20, 'Márcia Oliveira', '012.345.678-90'),
(21, 'Eduardo Costa', '111.222.333-44'),
(22, 'Beatriz Castro', '222.333.444-55'),
(23, 'Leonardo Mendes', '333.444.555-66'),
(24, 'Isabela Campos', '444.555.666-77'),
(25, 'Vinícius Lima', '555.666.777-88'),
(26, 'Aline Silva', '666.777.888-99'),
(27, 'Rafael Gomes', '777.888.999-00'),
(28, 'Luisa Santos', '888.999.000-11'),
(29, 'Gustavo Souza', '999.000.111-22');

//Insert da tabela "contato"
INSERT INTO contato (id, tipo, descricao, id_pessoa) VALUES
(1, 'telefone', '(11) 1111-1111', 1),
(2, 'celular', '(11) 99999-9999', 1),
(3, 'email', 'joao.silva@gmail.com', 1),
(4, 'telefone', '(22) 2222-2222', 2),
(5, 'celular', '(22) 99999-9999', 2),
(6, 'email', 'maria.oliveira@hotmail.com', 2),
(7, 'telefone', '(33) 3333-3333', 3),
(8, 'celular', '(33) 99999-9999', 3),
(9, 'email', 'pedro.santos@yahoo.com.br', 3),
(10, 'telefone', '(44) 4444-4444', 4),
(11, 'celular', '(44) 99999-9999', 4),
(12, 'email', 'ana.souza@uol.com.br', 4),
(13, 'telefone', '(55) 5555-5555', 5),
(14, 'celular', '(55) 99999-9999', 5),
(15, 'email', 'lucas.ferreira@gmail.com', 5),
(16, 'telefone', '(66) 6666-6666', 6),
(17, 'celular', '(66) 99999-9999', 6),
(18, 'email', 'juliana.costa@hotmail.com', 6),
(19, 'telefone', '(77) 7777-7777', 7),
(20, 'celular', '(77) 99999-9999', 7),
(21, 'email', 'roberto.almeida@uol.com.br', 7),
(22, 'telefone', '(88) 8888-8888', 8),
(23, 'celular', '(88) 99999-9999', 8),
(24, 'email', 'mariana.lopes@gmail.com', 8),
(25, 'telefone', '(99) 9999-9999', 9),
(26, 'celular', '(99) 99999-9999', 9),
(27, 'email', 'ana.silva@uol.com.br', 9),
(28, 'telefone', '(00) 0000-0000', 10),
(29, 'celular', '(00) 99999-9999', 10),
(30, 'email', 'carlos.souza@hotmail.com', 10);
