<?php
include_once '../Dao/Categoriadao.php';
include_once './_Msg.php';

if (isset($_POST['btncadastrar'])) {
    $nome = $_POST['nome'];

    $objdao = new Categoriadao();

    $resul = $objdao->InsertCategoria($nome); 
}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_Head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php
            include_once '_topo.php';
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
                            <h2>Nova Categoria</h2>   
                            <h5>Aqui você cadastra sua Categoria </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="Categoria_nova.php">
                        <div class="form-group">
                            <label>Nome Categoria</label>
                            <input class="form-control" placeholder="Digite aqui" name="nome" />
                        </div>
                        <button type="submit" class="btn btn-success" name="btncadastrar" onclick="return ValidarCampos()">Cadastrar</button> 
                    </form> 
                </div>

            </div>

        </div>
        <script>

//            function ValidarCampos() {
//
//                if ($("#nome").val().trim() == "")
//                alert("Preencher o campo Nome");
//                $("#nome").focus();
//                return false;
//
//
//            }

        </script>
    </body>
</html>
