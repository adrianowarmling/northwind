<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once("territorio-database.php");

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","northwind","essaeminhasenha","northwind");
?>
    <form action="cadastro-territorio.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="IDTerritorio">IDTerritorio</label>
                <input type="text" class="form-control" id="IDTerritorio" name="IDTerritorio" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="DescricaoTerritorio">Descrição do Territorio</label>
                <input type="text" class="form-control" id="DescricaoTerritorio" name="DescricaoTerritorio" required>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="IDRegiao">IDRegião</label>
                <input type="text" class="form-control" id="IDRegiao" name="IDRegiao">
            </div>
        </div>
           
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success totalwidth">Submit</button>
            </div>
        </div>
    </form>
<?php
    include_once('rodape.php');
?>