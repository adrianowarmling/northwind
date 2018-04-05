<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('cadastra-database.php');
    $funcionarios = buscarFuncionarios($conexao);
?>



    <form action="cadastra-database-fun.php" method="POST">
        <input type="hidden" id="id" name="id" class="form-control" >
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text"  id="sobrenome" name="sobrenome" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text"  id="titulo" name="titulo" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="titulocortesia">Título Cortesia</label>
                <input type="text"  id="titulocortesia" name="titulocortesia" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="datanascimento">Data de Nascimento</label>
                <input type="date"  id="datanascimento" name="datanascimento" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="dataadmissao">Data de Admição</label>
                <input type="date"  id="dataadmissao" name="dataadmissao" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text"  id="endereco" name="endereco" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text"  id="cidade" name="cidade" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="regiao">Região</label>
                <input type="text"  id="regiao" name="regiao" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="number"  id="cep" name="cep" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="pais">País</label>
                <input type="text"  id="pais" name="pais" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="telefoneresidencial">Telefone Residencial</label>
                <input type="number"  id="telefoneresidencial" name="telefoneresidencial" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="extensao">Extensao</label>
                <input type="text"  id="extensao" name="extensao" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="repotase">Reporta-se à</label>
                <select name="reportase" id="reportase" class="form-control">
                    <?php foreach ($funcionarios as $func): ?>
                        <option value="<?=$func['IDFuncionario']?>"><?=$func['Nome'].' '.$func['Sobrenome']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="notas">Notas</label>
                <input type="text"  id="notas" name="notas" class="form-control">
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth" >Cadastrar</button>
        </div>
    </form>
  

<?php
    include_once('rodape.php');
    ?>