<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="World Digital - SOLUÇÕES EM TI QUE GERAM RESULTADOS!">
        <meta name="author" content="Lucas Leal - @adialaleal">

        <title>World Digital - Fast Print Sabin</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        
        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/creative.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            .txtarea {
                height: 100px;
            }
            
        </style>


    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">WORLD DIGITAL</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">Como Funciona</a>
                        </li>

                        <li>
                            <a class="page-scroll" href="#contact">Imprimir</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <img src="img/world.png" height="55%" width="55%"/>
                    
                    <p></p>
                    <br>
                </div>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Confira</a>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Descomplicamos!</h2>
                        <hr class="light">
                        <p class="text-faded">Você quer imprimir, mas não sabe como configurar suas impressões, ou se perde em meio a tantas opções? Fique tranquilo, nós trouxemos até você esta solução onde tudo se tornou mais fácil!</p>

                    </div>
                </div>
            </div>
        </section>

        <!-- Início Modal -->
        <aside class="bg-dark">
            <div class="container text-center">
                <!-- Botão que chama o Modal --> 
                <div class="call-to-action">
                    <h2>Comece a imprimir agora mesmo!</h2>
                    <!-- Button trigger modal -->
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
                        Imprimir
                    </button>

                </div>
                <!-- Termino do botão -->
            </div>
        </aside>


        <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                       <h4 class="modal-title" id="myModalLabel" align="center">
                            <strong>Formulário de Impressão</strong>
                       </h4>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" method="post" action="input.php">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputNome">Nome</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" 
                                           id="inputNome" name="inputNome" placeholder="José"/>
                                </div>
                                <label class="col-sm-2 control-label"
                                       for="inputSetor">Setor</label>  
                                <div class="col-sm-4">
                                    <select class="form-control" id="inputSetor">
                                        <option>RH</option>
                                        <option>Marketing</option>
                                        <option>Uni Sabin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputRamal">Ramal</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" 
                                           id="inputRamal" placeholder="XXXX" maxlength="4" required/>
                                </div>
                                <label class="col-sm-2 control-label"
                                       for="inputEmail3">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control"
                                           id="inputEmail3" placeholder="exemplo@email.com.br" required />

                                </div>
                            </div>
                            <div>
                                <h4 class="modal-subtitle" id="myModalLabel" align="text-center">
                                    <strong>Especificações da Impressão</strong>
                                </h4>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"
                                           for="inputFile">Arquivo</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control"
                                           id="inputFile" required>
                                </div>
                                </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputCopias">Cópias</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"
                                           id="inputCopias" maxlength="3" required>
                                </div>
                            <label class="col-sm-2 control-label"
                                       for="inputPapel">Papel</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="inputFile" required>
                                        <option>Comum</option>
                                        <option>Reciclado</option>
                                        <option>Alta Gramatura 115g/m²</option>
                                        <option>Alta Gramatura 210g/m²</option>
                                        <option>Alta Gramatura 250g/m²</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"
                                       for="inputCor">Colorido</label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="inputFile" required>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label"
                                       for="inputAcabamento">Acabamento</label>
                                <div class="col-sm-4">
                                    <select class="form-control" id="inputFile" required>
                                        <option>1 Face</option>
                                        <option>2 Faces</option>
                                        <option>1 Face / Grampeado</option>
                                        <option>2 Faces / Grampeado</option>
                                        <option>Livreto</option>
                                        <option>Múltiplo 2/1</option>
                                        <option>Múltiplo 4/1</option>
                                    </select>
                                </div>
                                </div>
                            <div>
                                <h4 class="modal-subtitle" id="myModalLabel" align="text-center">
                                    <strong>Observações da Impressão</strong>
                                </h4>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12" align="justify">
                                    <textarea cols="30" rows="5" class="txtarea col-sm-12" maxlength="180" placeholder="Insira aqui demais observações sobre a impressão..."></textarea>
                            </div>
                            </div>
                          
</form>






                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">
                            Fechar
                        </button>
                        <input type="submit" class="btn btn-success" value="ENVIAR">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Modal -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Estamos sempre por perto!</h2>
                        <hr class="primary">
                        <p>Surgiu alguma dúvida? Não sabe bem o que fazer? Estamos sempre prontos e preparados para te atender!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>Ramal: 8156</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="mailto:lucas@wdbsb.com.br">Mande nos seu email</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>
        <!-- Máscara telefone 9 dígitos + DDD -->
        <script type="text/javascript">
            /* Máscaras ER */
            function mascara(o, f) {
                v_obj = o
                v_fun = f
                setTimeout("execmascara()", 1)
            }
            function execmascara() {
                v_obj.value = v_fun(v_obj.value)
            }
            function mtel(v) {
                v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
                v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id(el) {
                return document.getElementById(el);
            }
            window.onload = function () {
                id('telefone').onkeypress = function () {
                    mascara(this, mtel);
                }
            }
        </script>
        <script src="https://use.fontawesome.com/9e4f763141.js"></script>
    </body>

</html>
