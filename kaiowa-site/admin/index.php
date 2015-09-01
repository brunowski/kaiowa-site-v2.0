<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon"/>
    <title>Kaiowá | Tecnologia Nacional</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <header>
        <hr style='width: 100%; height:20px; background:#a0bb3a; padding: 0px; margin: 0px;'/>
        <img class="img-responsive"src="../img/logo.png" alt=""></img>
        <hr style='width: 100%; height:20px; background:#a0bb3a; padding: 0px; margin: 0px;'/>
    </header>
    <div class="row">
        <div class="col-md-8">
            <form action="verifcad.php" method="POST" enctype="multipart/form-data" class="form-horizontal formulario">
                        <fieldset>

                        <!-- Nome do Formulário -->
                        <h1>Cadastrar Novo Produto</h1>

                        <h3>Informações Básicas:</h3>
                        <!-- NOME DO PRODUTO -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nomeproduto">Nome:</label>  
                          <div class="col-md-6">
                          <input id="nomeproduto" name="nomeproduto" type="text" placeholder="nome do produto" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- DESCRIÇÃO -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="desc">Descrição:</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="desc" name="desc" placeholder="Descreva o produto" maxlength="999"></textarea>
                          </div>
                        </div>

                        <!-- INFORMAÇÕES ADICIONAIS -->
                        
                        <!-- PDF --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="pdf">PDF:</label>
                          <div class="col-md-4">
                            <input id="pdf" name="pdf" class="input-file" type="file">
                          </div>
                        </div>
                        
                        <!-- VÍDEO DEMO -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="video">Vídeo Demo:</label>  
                          <div class="col-md-4">
                          <input id="video" name="video" type="text" placeholder="URL do vídeo" class="form-control input-md">
                            
                          </div>
                        </div>

                        <hr style='width: 100%; height:1px; background:#a0bb3a; padding: 0px; margin: 3px;'/>
                        <br>

                        <!-- DIFERENCIAL -->
                        <h3>Diferenciais:</h3>
                        <!-- Diferencial 1-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="dif">Diferencial 1:</label>  
                          <div class="col-md-4">
                          <input id="dif" name="dif" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Diferencial 2-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="dif2">Diferencial 2:</label>  
                          <div class="col-md-4">
                          <input id="dif2" name="dif2" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Diferencial 3-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="dif3">Diferencial 3:</label>  
                          <div class="col-md-4">
                          <input id="dif3" name="dif3" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Diferencial 4-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="dif4">Diferencial 4:</label>  
                          <div class="col-md-4">
                          <input id="dif4" name="dif4" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>
                        <hr style='width: 100%; height:1px; background:#a0bb3a; padding: 0px; margin: 3px;'/>
                        <br>
                        
                        <!-- DETALHES -->
                        <h3>Detalhes do Produto:</h3>
                        <!-- Det. 1-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det1">Detalhe 1:</label>  
                          <div class="col-md-4">
                          <input id="det1" name="det" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 2-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det2">Detalhe 2:</label>  
                          <div class="col-md-4">
                          <input id="det2" name="det2" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 3-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det3">Detalhe 3:</label>  
                          <div class="col-md-4">
                          <input id="det3" name="det3" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 4-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det4">Detalhe 4:</label>  
                          <div class="col-md-4">
                          <input id="det4" name="det4" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 5-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det5">Detalhe 5:</label>  
                          <div class="col-md-4">
                          <input id="det5" name="det5" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 6-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det6">Detalhe 6:</label>  
                          <div class="col-md-4">
                          <input id="det6" name="det6" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 7-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det7">Detalhe 7:</label>  
                          <div class="col-md-4">
                          <input id="det7" name="det7" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>
                        
                        <!-- Det. 8-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det8">Detalhe 8:</label>  
                          <div class="col-md-4">
                          <input id="det8" name="det8" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 9-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det9">Detalhe 9:</label>  
                          <div class="col-md-4">
                          <input id="det9" name="det9" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 10-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det10">Detalhe 10:</label>  
                          <div class="col-md-4">
                          <input id="det10" name="det10" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 11-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det11">Detalhe 11:</label>  
                          <div class="col-md-4">
                          <input id="det11" name="det11" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>

                        <!-- Det. 12-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="det12">Detalhe 12:</label>  
                          <div class="col-md-4">
                          <input id="det12" name="det12" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                        </div>
                        <hr style='width: 100%; height:1px; background:#a0bb3a; padding: 0px; margin: 3px;'/>
                        <br>

                        <!-- IMAGENS DO SLIDE -->
                        <h3>Imagens para o Slide:</h3>
                        <!-- Imagem 1 --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="img1">Imagem 1:</label>
                          <div class="col-md-4">
                            <input id="img1" name="img1" class="input-file" type="file">
                          </div>
                        </div>

                        <!-- Imagem 2 --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="img2">Imagem 2:</label>
                          <div class="col-md-4">
                            <input id="img2" name="img2" class="input-file" type="file">
                          </div>
                        </div>

                        <!-- Imagem 3 --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="img3">Imagem 3:</label>
                          <div class="col-md-4">
                            <input id="img3" name="img3" class="input-file" type="file">
                          </div>
                        </div>
                        <div class="form-group">
                          <span class="help-block">**As imagens devem conter o tamanho de 800px por 550px</span>
                        </div>
                            
                        <!-- Botão enviar -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="enviar"></label>
                          <div class="col-md-4">
                            <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>


                        </fieldset>
                    </form>
    </div>
    </div>
</body>
                   
    
</html>