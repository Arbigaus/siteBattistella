<?php
require 'environment.php';

define("EMPRESA_NOME", "Battistella Administração e Participações SA");
define("MATRIZ_CNPJ", "CNPJ: 42.331.462/0001-31");
define("EMPRESA_END", "Alameda Bom Pastor, 3700");
define("EMPRESA_CIDADE", "São José dos Pinhais | PR");
define("EMPRESA_FONE", "Tel: (41) 3299-7200");
define("EMPRESA_CONTATO","Tel: (41) 3299-8590");
define("EMPRESA_EMAIL","Email: ri@bttl.com.br");
define("SITE_TITLE", "Battistella | ");


global $config;
$config = array();
if(ENVIRONMENT == "development") {
	$config['dbname'] = 'battistella_temp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'admin';
	$config['dbpass'] = 'admin';
	define("BASE_URL", "http://battistella.pc/");
} else {
	$config['dbname'] = 'battistella_temp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'g123456@*';
	define("BASE_URL", "http://www.battistella.com.br/");
}

define("HISTORICO","
	<p>Aos 93 anos, um grande homem continuava a acreditar na força de sua estrela guia com a mesma intensidade de quando era menino. Com a mente e o coração fixados nesta força, costumava dizer que “o tempo viaja, mas as estrelas permanecem no céu”.</p>
                    <p>Este pensamento, somado à força do trabalho, transformou sonhos grandiosos na realidade que é hoje a Battistella.
                    Emílio Fiorentino Battistella fundou o grupo de empresas Battistella em 9 de março de 1949 com a implantação de uma serraria, na cidade de Lages (SC). </p>
                    <p>O espírito empreendedor do fundador e de seus sócios inspirou a ampliação e diversificação dos negócios no decorrer dos anos. O ingresso em novas áreas sempre foi pautado pelas experiências anteriores.</p>
                    <p>Desde a fundação, a companhia passou por diversas mudanças, acompanhando o ritmo das tendências, necessidades e exigências do mercado. Hoje o grupo Battistella atua em veículos pesados Scania na qual tem liderança e excelência – abrangendo a venda de veículos novos, seminovos, peças e serviços –, atua na industrialização e comercialização de madeira e controla a Portinvest, empresa de investimentos portuários.</p>
                    <p>Nosso trabalho é conduzido por nossos valores: pioneirismo, otimismo, criatividade, responsabilidade socioambiental, ambiente positivo, empreendedorismo, enfrentamento de desafios, ética/honestidade/idoneidade, dedicação e respeito – que traduzem a essência da Battistella e reforçam uma postura de transparência e credibilidade junto a nossos públicos de relacionamento.
		</p>
	");