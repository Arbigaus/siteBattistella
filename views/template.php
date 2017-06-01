<!DOCTYPE html>
<html>
<body>
<head>
	<!-- Desenvolvido por Gerson Arbigaus -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo SITE_TITLE; ?>Documentos</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL."assets/css/materialize.min.css"; ?>" />
	<link rel="stylesheet" href="<?php echo BASE_URL."assets/css/nouislider.min.css"; ?>" />
	<link rel="stylesheet" href="<?php echo BASE_URL."assets/css/style.css"; ?>" />
</head>
<main>	
	<nav>
		<div class="nav-wrapper green darken-3">
			<a href="/" class="brand-logo"><img src="<?php echo BASE_URL."assets/images/logo_white.png"; ?>" class="logo_img" /></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="/login">Entrar</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	
</main>
<footer class="page-footer green darken-4">
	<div class="container">
            <div class="row">
                <div class="white-text col l6 s12">
                    <p class="white-text" style="font-size: 20px; padding-bottom: 1px;">Relação com Investidores</p>
                    <ul class="grey-text text-lighten-3">
                        <li><?php echo EMPRESA_CONTATO; ?></li>
                        <li><a class="grey-text text-lighten-3" href="mailto:<?php echo EMPRESA_EMAIL; ?>"><?php echo EMPRESA_EMAIL; ?></a></li>
                    </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <p class="white-text" style="font-size: 20px; padding-bottom: 0px;">Informações</p>
                    <ul>
                        <li><a target="_blank" class="grey-text text-lighten-3" href="http://siteempresas.bovespa.com.br/consbov/ExibeTodosDocumentosCVM.asp?CCVM=15458&CNPJ=42.331.462/0001-31&TipoDoc=C">CVM - Arquivos</a></li>
                        <li><a class="grey-text text-lighten-3" href="<?php echo BASE_URL."documentos"; ?>">Documentos Societários</a></li>                   
                    </ul>
                    
                    
                </div>
            </div>
        </div> 		
</footer>

	<script type="text/javascript" src="<?php echo BASE_URL."assets/js/jquery.min.js"; ?>" ></script>
	<script type="text/javascript" src="<?php echo BASE_URL."assets/js/materialize.min.js"; ?>" ></script>
	<script type="text/javascript" src="<?php echo BASE_URL."assets/js/script.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo BASE_URL."assets/js/jquery.mask.js"; ?>"></script>	

</body>
</html>