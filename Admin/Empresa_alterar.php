<?php
include_once '../Dao/Empresadao.php';


if (isset($_GET['cod']) && $_GET['cod'] != '' && is_numeric($_GET['cod'])) {
    $dao = new Empresadao();
    $idempresa = $_GET['cod'];

    $dados = $dao->Detalheempresa($idempresa);
    if (count($dados) == 0) {

        header('location: empresa_consultar.php');
    }
} else if(isset($_POST['btnalterar'])){
        
       
} else if(isset ($_post['btnexcluir'])){
         
}
else {

    header('location: empresa_consultar.php');
}
?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_Head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php
            include_once '_Topo.php';
            include_once '_Menu.php';
            ?>

            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if (isset($resul)) {
                                exibirmsg($resul);
                            }
                            ?>
                            <h2>Alterar Empresa</h2>   
                            <h5>Aqui você Altera sua Empresa </h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="Empresa_alterar.php">
                        <div class="form-group">
                            <label>Nome da Empresa</label>
                            <input class="form-control" placeholder="Digite aqui" name="nome" value="<?= $dados[0]['nome_empresa'] ?>" />
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input class="form-control" placeholder="Digite aqui" name="tel" value="<?= $dados[0]['telefone_empresa'] ?>" />
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input class="form-control" placeholder="Digite aqui" name="end" value="<?= $dados[0]['endereco_empresa'] ?>" />
                        </div>
                        <button type="submit" class="btn btn-success" name="btnalterar" >Alterar</button>
                        <button type="submit" class="btn btn-danger" name="btnexcluir" >Excluir</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
            function ValidarCampos() {

                if ($("#nomeempresa").val().trim() == "") {
                    alert("Digite o nome da Empresa");
                    $("#nomeempresa").focus();
                }
                if ($("#tel").val().trim() == "") {
                    alert("Digite o numero de telefone");
                    $("#tel").focus();
                }
                if ($("#end").val().trim() == "") {
                    alert("Digite o Endereço");
                    $("#end").focus();
                }
            }


        </script>


    </body>
</html>
