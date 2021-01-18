-- phpMyAdmin SQL Dump
-- version 3.3.10deb1.1
-- http://www.phpmyadmin.net
--
-- Servidor: 187.45.196.200
-- Tempo de Geração: Abr 26, 2011 as 09:28 PM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.3-7+squeeze1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `avantesolucoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tdrelacaotoner`
--

CREATE TABLE IF NOT EXISTS `tdrelacaotoner` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` text,
  `fabricante` text,
  `modelo` text,
  `impressoras` text,
  `especificacao` text,
  `arquivo_procedimento` text,
  `compativel` text,
  `obs` text,
  `qtd_po` text,
  `preco_chip` text,
  `preco_cilindro` text,
  `preco_refil` text,
  `preco_recarga` text,
  `preco_remanufaturado` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Extraindo dados da tabela `tdrelacaotoner`
--

INSERT INTO `tdrelacaotoner` (`ID`, `arquivo`, `fabricante`, `modelo`, `impressoras`, `especificacao`, `arquivo_procedimento`, `compativel`, `obs`, `qtd_po`, `preco_chip`, `preco_cilindro`, `preco_refil`, `preco_recarga`, `preco_remanufaturado`) VALUES
(18, 'arquivos/TONER HP CE278A.JPG', 'HP', 'CE278A', '', '"EspecificaÃ§Ãµes TÃ©cnicas \r\nCor: Preto\r\nRedimento: 2100 pÃ¡ginas com cobertura de 5% da folha\r\n \r\n"\r\n', '', 'Laserjet P1560, P1566, P1606dn, CE278A\r\n', NULL, NULL, 'R$ 0,00', '', 'R$ 0,00', '48 HORAS', 'R$ 150,00'),
(17, 'arquivos/TONER HP Q2612A.JPG', 'HP', 'CE278A', '', '"EspecificaÃ§Ãµes TÃ©cnicas \r\nCor: Preto\r\nRedimento: 2100 pÃ¡ginas com cobertura de 5% da folha\r\n \r\n"\r\n', '', 'Laserjet P1560, P1566, P1606dn, CE278A\r\n', NULL, NULL, 'R$ 0,00', '', 'R$ 0,00', '48 HORAS', 'R$ 150,00'),
(19, 'arquivos/TONER HP CE285A.JPG', 'HP', 'CE285A', '', '"Cor: Preto\r\nRedimento: 2100 pÃ¡ginas com cobertura de 5% da folha"\r\n', '', 'HP LaserJet Professionl P1102 & P1102w, CE285A\r\n', '-', '-', 'R$ 0,00', '', 'R$ 0,00', '48 HORAS', 'R$ 150,00'),
(39, 'arquivos/TONER XEROX 3428.png', 'XEROX', '3428', '', '_', '', '3428, 3124, 3117, 3122, 3125', '_', '_', '_', '', '_', '48 HORAS', 'R$ 219,00'),
(20, 'arquivos/TONER HP CE285A.JPG', 'HP', 'CE285A', '', '"Cor: Preto\r\nRedimento: 2100 pÃ¡ginas com cobertura de 5% da folha"\r\n', '', 'HP LaserJet Professionl P1102 & P1102w, CE285A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 150,00'),
(40, 'arquivos/TONER XEROX P8E P8EX.png', 'XEROX', 'P8E P8EX', '', '_', '', 'WorkCentre 385 (113R296),\r\nXerox DocuPrint P8E, P8EX.', '_', '_', '_', '', '_', '48 HORAS', 'R$ 160,00'),
(15, 'arquivos/TONER XEROX 3117 3124.png', 'XEROX', '3117 3124', '', 'N/A', '', '3117 3124 PE16 PE220', 'N/A', 'N/A', 'N/A', '', 'N/A', '48 HORAS', 'R$ 170,00 '),
(21, 'arquivos/TONER HP CB435A.JPG', 'HP', 'CB435A', '', '"Cor(es) dos cartuchos de impressÃ£o: \r\n\r\nPreto\r\n\r\nPage yield (black, A4)\r\n\r\n1500 pÃ¡ginas standard. O valor declarado do rendimento estÃ¡ conforme a ISO/IEC 19752.\r\n\r\nGama de temperaturas de funcionamento\r\n\r\n10 atÃ© 32,5Â° C\r\n\r\nIntervalo de humidade para funcionamento\r\n\r\n20 a 80% HR \r\n"\r\n', '', 'T1005, P1005, 1505, 1522, CB435A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 140,00'),
(22, 'arquivos/TONER HP CB436A.JPG', 'HP', 'CB436A', '', '"DescriÃ§Ã£o\r\n\r\nO toner CB436A traz uma nova tecnologia para o mercado de impressÃµes a laser, atravÃ©s de um toner mais compacto, com valor acessÃ­vel e sem comprometer a qualidade.\r\n\r\nCaracterÃ­sticas do Produto\r\n\r\nNova tecnologia: o pÃ³ que vem dentro do cartucho Ã© esfÃ©rico, proporcionando impressÃµes fortes e definidas\r\nCartucho compacto: embalagem menor\r\nPreÃ§o mais acessÃ­vel\r\nCartucho inteligente: avisa quando o nÃ­vel estÃ¡ baixo\r\nNÃ£o compromete a qualidade\r\nRendimento: 1.000 pÃ¡ginas no cartucho de introduÃ§Ã£o que vem dentro da impressora e 2.000 pÃ¡ginas o cartucho convencional. \r\nCompatÃ­bilidade\r\n\r\nCom a nova impressora monocromÃ¡tica HP Laserjet P1505, com uma velocidade de atÃ© 24 pÃ¡ginas por minuto ( tamanho carta ) , resoluÃ§Ã£o de 1200 x 1200 dpi, memÃ³ria de 2Mb, ciclo mensal mÃ¡ximo de 8.000 pÃ¡ginas, bandeja de entrada 1 multiuso para 10 folhas, bandeja de entrada 2 para 250 folhas, linguagem de impressÃ£o baseada em host e interface USB 2.0 de alta velocidade\r\n"\r\n', '', 'P1505, P1505n, M1120 MFP, M1522n MFP, M1522nf MFP, T1120, 1505, 1522, CB436A\r\n', '_', '_', 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 140,00'),
(23, 'arquivos/TONER HP Q1338A.JPG', 'HP', 'Q1338A', '', '"Diferencial do produto\r\nPreto, tecnologia Smart Printing, alto desempenho \r\n\r\nDesempenho\r\nRendimento em pÃ¡ginas, preto, carta: Rendimento mÃ©dio do cartucho de 12.000 pÃ¡ginas padrÃ£o. Valor declarado de rendimento de acordo com a ISO/IEC 19752. \r\nValor declarado de rendimento de acordo com a ISO/IEC 19752\r\n\r\nCor\r\nCores dos cartuchos de impressÃ£o Preto \r\n\r\nTecnologia \r\nTecnologia de impressÃ£o: Laser\r\nTecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente \r\nFaixa de umidade: 20 a 80% umidade relativa\r\nTemperatura mÃ¡xima de operaÃ§Ã£o: 10 a 33 Â°C \r\n\r\nDimensÃµes e peso\r\nDimensÃµes do produto (padrÃ£o): 385 x 192 x 312 mm\r\nPeso do produto: 1.9 kg \r\nPeso do pacote: 2.8 kg \r\n\r\nGarantia \r\nGarantia de ProteÃ§Ã£o Premium da HP. Este produto HP tem garantia contra defeitos de material e de fabricaÃ§Ã£o"\r\n', '', '4200, 4200n, 4200tn, 4200dtn, Q1338A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 180,00'),
(24, 'arquivos/TONER HP Q1339A.JPG', 'HP', 'Q1339A', '', NULL, '', '4300, 240TA, Q1339A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 200,00'),
(25, 'arquivos/TONER HP CB505A.JPG', 'HP', 'CB505A', '', NULL, '', '2030, 2035, 2055, CB505A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 190,00'),
(26, 'arquivos/TONER HP CB505X.JPG', 'HP', 'CB505X', '', NULL, '', 'P2050, 2055, CB505X\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 280,00'),
(27, 'arquivos/TONER HP C3906A.JPG', 'HP', 'C3906A', '', '"Diferencial do produto\r\n- Toner microfino, preto, alto desempenho\r\n\r\nCor\r\n- Cores dos cartuchos de impressÃ£o Preto\r\n\r\nTecnologia\r\n- Tecnologia de impressÃ£o: Laser\r\n- Tecnologia de resoluÃ§Ã£o de impressÃ£o: Microfine\r\n\r\nEnergia e meio ambiente\r\n- Faixa de umidade: 10 a 80% umidade relativa\r\n- Temperatura mÃ¡xima de operaÃ§Ã£o: 10 a 32.5 Â°C\r\n\r\nDimensÃµes e peso\r\n- DimensÃµes do produto (padrÃ£o): 351 x 131 x 165 mm\r\n- Peso do produto: 0.75 kg\r\n- Peso do pacote: 0.97 kg\r\n\r\nGarantia\r\n- Garantia de ProteÃ§Ã£o Premium da HP. Este produto HP tem garantia contra defeitos de material e de fabricaÃ§Ã£o "\r\n', '', '5L, 5ML,  6L, 3100, 3150, C3906A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 110,00'),
(28, 'arquivos/TONER HP Q5949A.JPG', 'HP', 'Q5949A', '', '"Diferencial do produto \r\n\r\nTecnologia Smart Printing, preto, 2500 pÃ¡ginas \r\n\r\nDesempenho \r\n\r\nRendimento em pÃ¡ginas, preto, carta: Rendimento mÃ©dio do cartucho de 2.500 pÃ¡ginas padrÃ£o. Valor declarado de rendimento de acordo com a ISO/IEC 19752. \r\nValor declarado de rendimento de acordo com a ISO/IEC 19752 \r\n\r\nCor\r\nCores dos cartuchos de impressÃ£o: Preto \r\n\r\nTecnologia\r\nTecnologia de impressÃ£o: Laser\r\nTecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente\r\nFaixa de umidade: 20 a 80% umidade relativa\r\nTemperatura mÃ¡xima de operaÃ§Ã£o: 10 a 32.5 Â°C\r\n\r\nDimensÃµes e peso\r\nDimensÃµes do produto (padrÃ£o): 117 x 390 x 168 mm\r\nPeso do produto: 0.7 kg\r\nPeso do pacote: 1 kg\r\n"\r\n', '', '1160 / 1320 / Q5949A', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 120,00'),
(29, 'arquivos/TONER HP Q5949X.JPG', 'HP', 'Q5949X', '', '"Diferencial do produto \r\n\r\nTecnologia Smart Printing, preto, 2500 pÃ¡ginas \r\n\r\nDesempenho \r\n\r\nRendimento em pÃ¡ginas, preto, carta: Rendimento mÃ©dio do cartucho de 6.000 pÃ¡ginas padrÃ£o. Valor declarado de rendimento de acordo com a ISO/IEC 19752. \r\nValor declarado de rendimento de acordo com a ISO/IEC 19752 \r\n\r\nCor\r\nCores dos cartuchos de impressÃ£o: Preto \r\n\r\nTecnologia\r\nTecnologia de impressÃ£o: Laser\r\nTecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente\r\nFaixa de umidade: 20 a 80% umidade relativa\r\nTemperatura mÃ¡xima de operaÃ§Ã£o: 10 a 32.5 Â°C\r\n\r\nDimensÃµes e peso\r\nDimensÃµes do produto (padrÃ£o): 117 x 390 x 168 mm\r\nPeso do produto: 0.7 kg\r\nPeso do pacote: 1 kg "\r\n', '', '1320, 3390, Q5949X\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 180,00'),
(30, 'arquivos/TONER HP Q7553A.JPG', 'HP', 'Q7553A', '', '"Desempenho \r\nâ€¢ Rendimento em pÃ¡ginas, preto, carta Rendimento mÃ©dio do cartucho de 3000 pÃ¡ginas padrÃ£o. \r\n\r\nCor \r\nâ€¢ Cores dos cartuchos de impressÃ£o: Preto \r\n\r\nTecnologia \r\nâ€¢ Tecnologia de impressÃ£o: Laser \r\nâ€¢ Tecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente \r\nâ€¢ Faixa de umidade: 20 a 80% umidade relativa \r\nâ€¢ Temperatura mÃ¡xima de operaÃ§Ã£o: 10 a 32.5 Â°C \r\n\r\nDimensÃµes e peso \r\nâ€¢ DimensÃµes do produto (padrÃ£o): 117 x 390 x 168 mm \r\nâ€¢ Peso do produto: 0.7 kg \r\nâ€¢ Peso do pacote: 1 kg"\r\n', '', 'P2014, P2014N, P2015, P2015N, Q7553A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 140,00'),
(31, 'arquivos/TONER HP Q7553X.JPG', 'HP', 'Q7553X', '', '"Desempenho \r\nâ€¢ Rendimento em pÃ¡ginas, preto, carta Rendimento mÃ©dio do cartucho de 6.000 pÃ¡ginas padrÃ£o. \r\nCor \r\nâ€¢ Cores dos cartuchos de impressÃ£o: Preto \r\n\r\nTecnologia \r\nâ€¢ Tecnologia de impressÃ£o: Laser \r\nâ€¢ Tecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente \r\nâ€¢ Faixa de umidade: 20 a 80% umidade relativa \r\nâ€¢ Temperatura mÃ¡xima de operaÃ§Ã£o: 10 a 32.5 Â°C \r\n\r\nDimensÃµes e peso \r\nâ€¢ DimensÃµes do produto (padrÃ£o): 117 x 390 x 168 mm \r\nâ€¢ Peso do produto: 0.7 kg \r\nâ€¢ Peso do pacote: 1 kg"\r\n', '', 'P2014, P2014N, P2015, P2015N, Q7553X\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 180,00'),
(32, 'arquivos/TONER HP Q7551A.JPG', 'HP', 'Q7551A', '', '"Desempenho \r\nâ€¢ Rendimento em pÃ¡ginas, preto, carta: Rendimento mÃ©dio do cartucho de 13.000 pÃ¡ginas padrÃ£o. \r\n\r\nCor \r\nâ€¢ Cores dos cartuchos de impressÃ£o: Preto \r\n\r\nTecnologia \r\nâ€¢ Tecnologia de impressÃ£o: Laser \r\nâ€¢ Tecnologia de resoluÃ§Ã£o de impressÃ£o: Smart \r\n\r\nEnergia e meio ambiente \r\nâ€¢ Faixa de umidade: 10 a 80% umidade relativa \r\nâ€¢ Temperatura mÃ¡xima de operaÃ§Ã£o: 15 a 32.5 Â°C \r\n\r\nDimensÃµes e peso \r\nâ€¢ DimensÃµes do produto (padrÃ£o): 388 x 165 x 327 mm \r\nâ€¢ Peso do produto: 1.6 kg \r\nâ€¢ Peso do pacote: 2.3 kg"\r\n', '', 'M3027, M3035, Q7551A\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 150,00'),
(33, 'arquivos/TONER HP Q7551X.JPG', 'HP', 'Q7551X', '', NULL, '', 'M3027, M3035, Q7551X\r\n', NULL, NULL, 'R$ 00,00', '', 'R$ 00,00', '48 HORAS', 'R$ 200,00'),
(34, 'arquivos/TONER HP CC364A.JPG', 'HP', 'CC364A', '', NULL, '', '4515, 4015, 4014, CC364A\r\n', NULL, NULL, NULL, '', NULL, '48 HORAS', 'R$ 250,00'),
(35, 'arquivos/TONER HP CC364X.JPG', 'HP', 'CC364X', '', NULL, '', '4515, 4015, 4014, CC364X\r\n', NULL, NULL, NULL, '', NULL, '48 HORAS', 'R$ 400,00'),
(36, 'arquivos/TONER HP Q5945A.JPG', 'HP', 'Q5945A', '', NULL, '', '4345,  M4345, M4345X MFP , Q5945A', NULL, NULL, NULL, '', NULL, '48 HORAS', 'R$ 320,00'),
(37, 'arquivos/TONER HP C8543X.JPG', 'HP', 'C8543X', '', NULL, '', '9000, 9000N, 9000DN, C8543X\r\n', NULL, NULL, NULL, '', NULL, '48 HORAS', 'R$ 350,00'),
(38, 'arquivos/TONER HP C3909A.JPG', 'HP', 'C3909A', '', NULL, '', '5SI, 5SIMX, 8000, C3909A\r\n', NULL, NULL, NULL, '', NULL, '48 HORAS', 'R$ 180,00'),
(41, 'arquivos/TONER XEROX 4118.png', 'xerox', '4118', '', '_', '', '4118/4118P/4118X 6R1278', '_', '_', '_', '', '_', '48 HORAS', 'R$ 169,00'),
(42, 'arquivos/TONER XEROX M15 M15i.png', 'xerox', 'M15 / M15i ', '', '-', '', 'M15 / M15i ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(43, 'arquivos/TONER XEROX Pe220.png', 'xerox', 'Pe220', '', '-', '', 'Poliester Pe 220 ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 169,00'),
(44, 'arquivos/TONER XEROX Pe220.png', 'xerox', 'Pe220', '', '-', '', 'Poliester Pe 220 ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 169,00'),
(45, 'arquivos/TONER XEROX 3200.png', 'xerox', '3200', '', '-', '', '3200', '-', '-', '-', '', '-', '48 HORAS', 'R$ 169,00'),
(46, 'arquivos/TONER XEROX M 118.png', 'xerox', 'M 118 ', '', '-', '', 'M 118 ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(47, 'arquivos/TONER XEROX 6110-6110 YELLOW.png', 'xerox', '6110 / 6110 MFP yellow ', '', '-', '', '6110 / 6110 MFP yellow ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 100,00'),
(48, 'arquivos/TONER XEROX 6110-6110 CYAN.png', 'xerox', '6110 / 6110 MFP Cyan', '', '-', '', '6110 / 6110 MFP Cyan', '-', '-', '-', '', '-', '48 HORAS', 'R$ 100,00'),
(49, 'arquivos/TONER XEROX 6110-6110 MAGENTA.png', 'xerox', '6110 / 6110 MFP Magenta', '', '-', '', '6110 / 6110 MFP Magenta', '-', '-', '-', '', '-', '48 HORAS', 'R$ 100,00'),
(51, 'arquivos/TONER XEROX 6110-6110 BLACK.png', 'xerox', '6110 / 6110 MFP Black ', '', '-', '', '6110 / 6110 MFP Black ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 100,00'),
(52, 'arquivos/TONER XEROX M-20.png', 'xerox', 'M-20', '', '-', '', 'M-20', '-', '-', '-', '', '-', '48 HORAS', 'R$ 160,00'),
(53, 'arquivos/TONER XEROX 312.png', 'xerox', '312', '', '-', '', '312', '-', '-', '-', '', '-', '48 HORAS', 'R$ 150,00'),
(55, 'arquivos/TONER XEROX 3250.png', 'xerox', '3250', '', '-', '', '3250', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(56, 'arquivos/TONER XEROX 3119.png', 'xerox', '3119', '', '-', '', '3119', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(57, 'arquivos/TONER XEROX 830.png', 'xerox', '830', '', '-', '', '830', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(58, 'arquivos/TONER XEROX Phazer 3100.png', 'xerox', '3100', '', '-', '', '3100', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(59, 'arquivos/TONER XEROX 5614.png', 'xerox', '5614', '', '-', '', '5614', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(60, 'arquivos/Series AL - 1000-  1041-1530-1630.png', 'xerox', 'AL - 1000', '', '-', '', 'AL - 1000 / 1041 / 1530 / 1630', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(61, 'arquivos/TONER SAMSUNG ML-1610.png', 'SAMSUNG ', 'ML-1610', '', '-', '', 'ML-1610, ML-1615, 2010', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(62, 'arquivos/TONER SAMSUNG ML-2010.png', 'samsung', 'ML-2010', '', '-', '', 'ML-2010 ML-2010D2', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(63, 'arquivos/TONER SAMSUNG SCX-4100.png', 'SAMSUNG', 'SCX-4100', '', '-', '', 'SCX-4100, SCX-4100D3', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(64, 'arquivos/TONER SAMSUNG SCX-4521F.png', 'SAMSUNG', 'SCX-4521F', '', '-', '', 'SCX 4521, SCX 4521F', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(65, 'arquivos/TONER SAMSUNG SCX-4200.png', 'SAMSUNG', 'SCX-4200', '', '-', '', 'SCX-4200, SCX-D4200A ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(66, 'arquivos/TONER SAMSUNG SCX-5115.png', 'SAMSUNG', 'SCX-5115', '', '-', '', 'SCX-5115, SCX5312D6 ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(67, 'arquivos/TONER SAMSUNG ML-1710.png', 'SAMSUNG', 'ML1710', '', '-', '', 'ML1710, ML1710D3', '-', '-', '-', '', '-', '48 HORAS', 'R$ 139,00'),
(68, 'arquivos/TONER SAMSUNG 2851.png', 'SAMSUNG', '2851', '', '-', '', '2851', '-', '-', '-', '', '-', '48 HORAS', 'R$ 219,00'),
(69, 'arquivos/TONER SAMSUNG 2850.png', 'SAMSUNG', '2850', '', '-', '', '2850', '-', '-', '-', '', '-', '48 HORAS', 'R$ 170,00 '),
(70, 'arquivos/TONER SAMSUNG SCX-4725A.png', 'SAMSUNG', 'SCX-4725A', '', '-', '', 'SCX-4725A, SCXD4725A, P 4725FN ', '-', '-', '-', '', '-', '48 HORAS', 'R$ 149,00'),
(71, 'arquivos/TONER SAMSUNG SCX-4216.png', 'SAMSUNG', 'SCX-4216', '', '-', '', 'SCX-4216, SCX-4216F, SCX4216D3', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(72, 'arquivos/TONER SAMSUNG SCX-4600.png', 'SAMSUNG', 'SCX-4600', '', '-', '', 'SCX-4600, MLT-D1052L', '-', '-', '-', '', '-', '48 HORAS', 'R$ 140,00'),
(73, 'arquivos/TONER SAMSUNG ML-1630.png', 'SAMSUNG', 'ML-1630', '', '-', '', 'ML-1630', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(74, 'arquivos/TONER SAMSUNG 209.png', 'SAMSUNG', '209', '', '-', '', '209, ML 4824, 4826, 4828, ML 2855', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(75, 'arquivos/TONER SAMSUNG 209L.png', 'SAMSUNG', '209L', '', '-', '', '209L, ML 4824, 4826, 4828, ML 2855', '-', '-', '-', '', '-', '48 HORAS', 'R$ 160,00'),
(76, 'arquivos/TONER SAMSUNG SCX-5530.png', 'SAMSUNG', 'SCX-5530', '', '-', '', 'SCX-5530', '-', '-', '-', '', '-', '48 HORAS', 'R$ 150,00'),
(77, 'arquivos/TONER SAMSUNG MLT-D1042S-104.png', 'SAMSUNG', 'MLT-D1042S / 104', '', '-', '', 'MLT-D1042S / 104, ML-1660/65/20/25', '-', '-', '-', '', '-', '48 HORAS', 'R$ 130,00'),
(78, 'arquivos/TONER SAMSUNG 208L.png', 'SAMSUNG', '208L', '', '-', '', '208L, SCX 5635', '-', '-', '-', '', '-', '48 HORAS', 'R$ 180,00 '),
(79, 'arquivos/TONER SAMSUNG 109.png', 'SAMSUNG', '109', '', '-', '', '109, SCX-4300', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(80, 'arquivos/TONER SAMSUNG 108.png', 'SAMSUNG', '108', '', '-', '', '108, ML-1640', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(81, 'arquivos/Toner Samsung CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - BLACK.png', 'SAMSUNG', 'CLP 300 - BLACK', '', '-', '', 'CLP-300, CLP-300N, CLX-2160N, CLX-3160FN', '-', '-', '-', '', '-', '48 HORAS', 'R$ 80,00'),
(82, 'arquivos/Toner Samsung CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - YELLOW.png', 'SAMSUNG', 'CLP 300 - YELLOW', '', '-', '', 'CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - YELLOW', '-', '-', '-', '', '-', '48 HORAS', 'R$ 80,00'),
(83, 'arquivos/Toner Samsung CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - MAGENTA.png', 'SAMSUNG', 'CLP 300 - MAGENTA', '', '-', '', 'CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - MAGENTA', '-', '-', '-', '', '-', '48 HORAS', 'R$ 80,00'),
(84, 'arquivos/Toner Samsung CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - CYAN.png', 'SAMSUNG', 'CLP 300 - CYAN', '', '-', '', 'CLP-300, CLP-300N, CLX-2160N, CLX-3160FN - CYAN', '-', '-', '-', '', '-', '48 HORAS', 'R$ 80,00'),
(85, 'arquivos/Toner Samsung CLP - 600 - YELLOW.png', 'SAMSUNG', 'CLP - 600 YELLOW', '', '-', '', 'CLP - 600 YELLOW', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(86, 'arquivos/Toner Samsung CLP - 600 - MAGENTA.png', 'SAMSUNG', 'CLP - 600 MAGENTA', '', '-', '', 'CLP - 600 MAGENTA', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(87, 'arquivos/Toner Samsung CLP - 600 - CYAN.png', 'SAMSUNG', 'CLP - 600 CYAN', '', '-', '', 'CLP - 600 CYAN', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(88, 'arquivos/Toner Samsung CLP - 600 - BLACK.png', 'SAMSUNG', 'CLP - 600 BLACK', '', '-', '', 'CLP - 600 BLACK', '-', '-', '-', '', '-', '48 HORAS', 'R$ 200,00'),
(89, 'arquivos/Toner Samsung CLT C409 - CYAN.png', 'SAMSUNG', 'CLT C409 - CYAN', '', '-', '', 'CLT C409, CLP 315/310, CLX-3171/3175', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(90, 'arquivos/Toner Samsung CLT C409 - YELLOW.png', 'SAMSUNG', 'CLTY409 - YELLOW', '', '-', '', 'CLTY409 - YELLOW, CLP 315/310, CLX-3171/3175', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(91, 'arquivos/Toner Samsung CLT C409 - MAGENTA.png', 'SAMSUNG', 'CLT M409 - MAGENTA', '', '-', '', 'CLT M409 - MAGENTA, CLP 315/310, CLX-3171/3175', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(92, 'arquivos/Toner Samsung CLT C409 - BLANCK.png', 'SAMSUNG', 'CLT K409 - BLACK', '', '-', '', 'CLT K409 - BLACK, CLP 315/310, CLX-3171/3175', '-', '-', '-', '', '-', '48 HORAS', 'EM BREVE'),
(93, 'arquivos/Toner Samsung CLP-K350A - BLACK.png', 'SAMSUNG', 'CLP-K350A BLACK', '', '-', '', 'CLP-K350A BLACK', '-', '-', '-', '', '-', '48 HORAS', 'R$ 180,00 '),
(94, 'arquivos/Toner Samsung CLP-C350A - CYAN.png', 'SAMSUNG', 'CLP-C350A CYAN', '', '-', '', 'CLP-C350A CYAN', '-', '-', '-', '', '-', '48 HORAS', 'R$ 180,00 '),
(95, 'arquivos/Toner Samsung CLP-M350A - MAGENTA.png', 'SAMSUNG', 'CLP-M350A MAGENTA', '', '-', '', 'CLP-M350A MAGENTA', '-', '-', '-', '', '-', '48 HORAS', 'R$ 180,00 '),
(96, 'arquivos/Toner Samsung CLP-Y350A- YELLOW.png', 'SAMSUNG', 'CLP-Y350A YELLOW', '', '-', '', 'CLP-Y350A YELLOW', '-', '-', '-', '', '-', '48 HORAS', 'R$ 180,00 ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `UsuID` int(5) NOT NULL AUTO_INCREMENT,
  `Login` varchar(20) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  PRIMARY KEY (`UsuID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsuID`, `Login`, `Senha`) VALUES
(1, 'admin', 'sistema');
