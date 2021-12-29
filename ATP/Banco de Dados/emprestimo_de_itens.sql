
--
-- Banco de dados: `emprestimo_de_itens`
--
CREATE DATABASE emprestimo_de_itens;
USE emprestimo_de_itens;
-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `nomeitem` varchar(50) DEFAULT NULL,
  `dataemprestimo` date DEFAULT NULL,
  `contatodestinatario` varchar(11) DEFAULT NULL,
  `datadevolucao` date DEFAULT NULL,
  `estatus` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `usuariolocatario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id_item`, `nomeitem`, `dataemprestimo`, `contatodestinatario`, `datadevolucao`, `estatus`, `id_usuario`, `usuariolocatario`) VALUES
(50, 'Moto G5', '2021-11-03', '45984537215', '2021-11-25', 'Disponivel', 16, NULL),
(51, 'PS4', '2021-11-10', '45998453727', '2021-11-25', 'Disponivel', 9, NULL),
(54, 'Galaxy', '2021-09-09', '45984537215', '2022-01-26', 'Disponivel', 9, NULL),
(55, 'Smart TV', '2021-11-03', '45998453722', '2021-12-09', 'Emprestado', 16, 'teste'),
(56, 'Controle remoto', '2021-11-17', '52998455748', '2021-11-21', 'Atrasado', 16, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nomeusuario` varchar(45) DEFAULT NULL,
  `senhausuario` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nomeusuario`, `senhausuario`, `email`, `datanascimento`) VALUES
(9, 'andre', 'andre', 'joao-leetg3@hotmail.com', '1999-01-13'),
(12, 'jhon', 'jhon', 'joao@hotmail.com', '1111-11-11'),
(13, 'joao', 'joao', 'andre@gmail.com', '2212-03-12'),
(16, 'teste', 'teste', 'teste@hotmail.com', '1999-02-12'),
(18, 'testefinal', 'teste', 'bueno@hotmail.com', '1998-01-12');

--
-- Acionadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `Atraso de entrega` AFTER UPDATE ON `usuario` FOR EACH ROW UPDATE `item` SET `estatus` = 'Atrasado'
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nomeusuario` (`nomeusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
