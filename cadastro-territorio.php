<<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('territorio-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
    $func = new Territorio($conexao);

    $sucesso = $func->addTerritorio($_POST['IDTerritorio'],$_POST['DescricaoTerritorio'],$_POST['IDRegiao'],$_POST['titulocortesia'],$_POST['datanascimento'],$_POST['dataadmissao'],$_POST['endereco'],$_POST['cidade'],$_POST['regiao'],$_POST['cep'],$_POST['pais'],$_POST['telefoneresidencial'],$_POST['extensao'],$_POST['notas'],$_POST['reportase']);
    
    if (!$sucesso) {
        echo(mysqli_error($conexao->getCon()));
    } else {
        header('Location:index.php');
    }
?>
<?php
    include_once('rodape.php');
?>