<?php
require_once '../Dao/Categoriadao.php';


if (isset($_GET['cod']) && $_GET['cod'] != '' && is_numeric($_GET['cod'])) {
    $dao = new Categoriadao();
    $idcategoria = $_GET['cod'];

    $dados = $dao->Detalhecategoria($idcategoria);
    if (count($dados) == 0) {

        header('location: categoria_consultar.php');
    }
   } else {

    header('location: categoria_consultar.php');
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
                            <h2>Alterar Categoria</h2>   
                            <h5>Aqui você altera sua Categoria</h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="Categoria_alterar.php">
                        <div class="form-group">
                            <label>Nome da Categoria</label>
                            <input class="form-control" placeholder="Digite aqui" name="categoria_alterar" id="nome" value="<?= $dados[0]['nome_categoria'] ?>"   />
                        </div>

                        <button type="submit" class="btn btn-success" name="btncadastrar" onclick="return ValidarCampos()">Alterar</button>
                        <button type="submit" class="btn btn-danger" onclick="return ValidarCampos()">Excluir</button>
                    </form>               
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>

            function ValidarCampos() {

                if ($("#nome").val().trim() == "")
                    alert("Preencher o campo Nome");
                $("#nome").focus();
                return false;


            }

        </script>

    </body>
</html>
