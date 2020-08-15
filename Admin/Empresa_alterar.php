<?php 
        include_once '../Dao/Empresadao.php';
        include_once './_Msg.php';
        
        if(isset($_POST['btncadastrar'])){
             
             $nome= $_POST['nome'];
             $tel = $_POST['tel'];
             $end = $_POST['end'];
             $cod = 1;
             $objdao = new Empresadao();
             
             $resul = $objdao->alterarEmp($cod, $nome, $tel, $end);
             
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
                                   if(isset($resul)){
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
                        <input class="form-control" placeholder="Digite aqui" name="nome" id="nome"/>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite aqui" name="tel" id="tel" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite aqui" name="end" id="end">
                    </div>
                        <button type="submit" class="btn btn-success" name="btncadastrar" onclick="return ValidarCampos123()" >Alterar</button>
                    <button type="submit" class="btn btn-danger" onclick="return ValidarCampos()" >Excluir</button>
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
                if($("#end").val().trim() == ""){
                    alert("Digite o Endereço");
                    $("#end").focus();
                }
            }


        </script>


    </body>
</html>
