
               <div class="center">
                   <img src="<?php echo BASE_URL."assets/images/logo.png"; ?>" class="logo_principal" />
               </div>
               <div class="text">
                   <?php echo HISTORICO; ?>
               </div>
        </div>
        </body>
    <footer class="page-footer green darken-4" style="margin-top: 5px;">
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
    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo BASE_URL."assets/images/background-bottom.jpg"; ?>"></div>
    </div>


    <script src="<?php echo BASE_URL."assets/js/jquery.min.js"; ?>"></script>
    <script src="<?php echo BASE_URL."assets/js/materialize.min.js"; ?>"></script>

    <script>
    $(document).ready(function(){        
        $('.parallax').parallax();
    })
    </script>

    <style>
        html {
            font-family: 'Open Sans', sans-serif;
        }
        .aviso {
            font-size: 30px;
        }
    </style>
</html>