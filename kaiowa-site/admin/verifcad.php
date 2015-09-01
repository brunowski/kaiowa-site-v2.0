<?php

header('Content-type: text/html; charset=UTF-8');

include_once 'conectBD.php';

if (isset($_POST['nomeproduto'])) {
    $nome = $_POST['nomeproduto'];
}
if (isset($_POST['desc'])) {
    $desc = $_POST['desc'];
}
if (isset($_POST['video'])) {
    $video = $_POST['video'];
}
if (isset($_POST['dif'])) {
    $dif = $_POST['dif'];
}
if (isset($_POST['dif2'])) {
    $dif2 = $_POST['dif2'];
}
if (isset($_POST['dif3'])) {
    $dif3 = $_POST['dif3'];
}
if (isset($_POST['dif4'])) {
    $dif4 = $_POST['dif4'];
}
if (isset($_POST['det'])) {
    $det = $_POST['det'];
}
if (isset($_POST['det2'])) {
    $det2 = $_POST['det2'];
}
if (isset($_POST['det3'])) {
    $det3 = $_POST['det3'];
}
if (isset($_POST['det4'])) {
    $det4 = $_POST['det4'];
}
if (isset($_POST['det5'])) {
    $det5 = $_POST['det5'];
}
if (isset($_POST['det6'])) {
    $det6 = $_POST['det6'];
}
if (isset($_POST['det7'])) {
    $det7 = $_POST['det7'];
}
if (isset($_POST['det8'])) {
    $det8 = $_POST['det8'];
}
if (isset($_POST['det9'])) {
    $det9 = $_POST['det9'];
}
if (isset($_POST['det10'])) {
    $det10 = $_POST['det10'];
}
if (isset($_POST['det11'])) {
    $det11 = $_POST['det11'];
}
if (isset($_POST['det12'])) {
    $det12 = $_POST['det12'];
}

$erro = 0;

if (empty($nome) or empty($desc) or empty($video) or empty($dif) or empty($dif2) or empty($dif3) or empty($dif4) or empty($det) or empty($det2) or empty($det3) or empty($det4) or empty($det5) or empty($det6) or empty($det7) or empty($det8) or empty($det9) or empty($det10) or empty($det11) or empty($det12)) {
    $erro = 1;
}else{
    $diretorioPdf = '../pdf/';
    #definindo as extensões
    $permissao = array('pdf');

    #recuperando a extensão do arquivo para depois fazer a verificação do tipo
    $exten = strtolower(end(explode('.', $_FILES['pdf']['name'])));

    #verificando se é o arquivo permitido ou não, verificando o tamanho do arquivo
    if (array_search($exten, $permissao) === false) {
        echo "<script>alert('Tipo de arquivo inválido, por favor envie um arquivo .pdf')</script>";
        $erro = 1;
    } else {
        #renomeando o arquivo para salvar no servidor
        $nomePdf = date('dmYHisu') . "." . $exten;
        $enviar = $diretorioPdf . $nomePdf;
        #Verificando se foi possível fazer o upload do arquivo
        if ($erro == 0){
            if(move_uploaded_file($_FILES['pdf']['tmp_name'], $enviar)) {
                ######
            }else{
                echo "<script>alert('Erro no upload do PDF')</script>";
                $erro = 1;
            }
        }
    }

    $diretorio = '../imgProdutos/';

    #definindo as extensões
    $permitido = array('jpg', 'png', 'jpeg');
    #definindo tamanho do arquivo em bytes
    $tamanho = 800 * 550 * 20;

    $img = 1;

    while ($img <= 3) {
        #recuperando a extensão do arquivo para depois fazer a verificação do tipo
        $extensao = strtolower(end(explode('.', $_FILES['img' . $img]['name'])));

        #verificando se é o arquivo permitido ou não, verificando o tamanho do arquivo
        if (array_search($extensao, $permitido) === false) {
            echo "<script>alert('Formato não permitido na imagem '.$img.)</script>";
            $erro = 1;
        } elseif ($_FILES['img' . $img]['size'] > $tamanho) {
            echo "<script>alert('Tamanho não permitido')</script>";
            $erro = 1;
        } else {
            #renomeando o arquivo para salvar no servidor
            $novoNome = 'img' . $img . '-' . date('dmYHisu') . "." . $extensao;
            $enivia = $diretorio . $novoNome;

            if ($img == 1) {
                $nomePronto1 = $novoNome;
            } elseif ($img == 2) {
                $nomePronto2 = $novoNome;
            } elseif ($img == 3) {
                $nomePronto3 = $novoNome;
            }
            #Verificando se foi possível fazer o upload do arquivo
            if ($erro == 0){
                    if(move_uploaded_file($_FILES['img' . $img]['tmp_name'], $enivia)) {
                        ########                    
                }else{
                    echo "<script>alert('Erro no upload da imagem!');</script>";
                    $erro = 1;
                }
            }
        }
        $img++;
    }
}

if ($erro == 0) {
    //Inserindo dados na tabela produto
    $sql = "INSERT INTO produto VALUES ('', '$nome', '$desc', '$nomePdf', '$video')";
    mysql_query($sql);
    //pegando id que foi inserido
    $query = mysql_query("SELECT * FROM produto WHERE nome ='" . $nome . "'");
    while ($result = mysql_fetch_object($query)) {
        //inserindo na tabela diferencial
        $sqlDif = "INSERT INTO diferencial VALUES ('$result->id_produto', '$dif', '$dif2', '$dif3', '$dif4')";
        mysql_query($sqlDif);
        //Inserindo na tabela detalhes
        $sqlDet = "INSERT INTO detalhe VALUES ('$result->id_produto', '$det', '$det2', '$det3', '$det4', '$det5', '$det6', '$det7', '$det8', '$det9', '$det10', '$det11', '$det12')";
        mysql_query($sqlDet);
        //Inserindo na tabela img
        $sqlImg = "INSERT INTO img VALUES ('$result->id_produto', '$nomePronto1', '$nomePronto2', '$nomePronto3')";
        mysql_query($sqlImg);
    }
    mysql_close($conexao);

    echo "<script> alert ('Cadastro efutado com sucesso') </script>";
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    
}else{
    echo "<script> alert ('Necessário preencher todos os campos') </script>";
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
