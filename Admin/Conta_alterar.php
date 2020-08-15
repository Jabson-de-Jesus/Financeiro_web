<?php
include_once '../Dao/Contadao.php';
include_once './_Msg.php';

if (isset($_POST['btncadastrar'])) {
    
    $conta = $_POST['conta'];
    $banco = $_POST['banco'];
    $saldoconta = $_POST['saldoconta'];
    $tipoconta = $_POST['tipoconta'];
    $cod = 1;

    $objdao = new Contadao();

    $resul = $objdao->alterarconta($cod, $conta, $banco, $saldoconta, $tipoconta);
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
                            <h2>Conta alterar</h2>   
                            <h5></h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="Conta_alterar.php">
                        <div class="form-group">
                            <label>Numero da conta</label>
                            <input class="form-control" placeholder="Digite aqui" name="conta" id="conta"/>
                        </div>
                        <div class="form-group">
                            <label>Nome da Banco</label>
                            <input class="form-control" placeholder="Digite aqui" name="banco" id="banco" />
                        </div>
                        <div class="form-group">
                            <label>Saldo da Conta</label>
                            <input class="form-control" placeholder="Digite aqui" name="saldoconta" id="saldoconta" />
                        </div>
                        <div class="form-group">
                            <label>tipo de Conta</label>
                            <select class="form-control" id="tipoconta" name="tipoconta">
                                <option value="">Selecione</option>
                                <option value="1">Conta Corrente</option>
                                <option value="2">Conta poupança</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="btncadastrar" onclick="return ValidarCampos123()">Alterar</button>
                        <button type="submit" class="btn btn-danger" onclick="return  ValidarCampos()" >Excluir</button>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
            function ValidarCampos() {

                if ($("#conta").val().trim() == "") {
                    alert("Digite sua conta");
                    $("#conta").focus();
                    return false;
                }
                if ($("#banco").val().trim() == "") {
                    alert("digite o nome do banco");
                    $("#banco").focus();
                    return false;

                }

                if ($("#saldoconta").val().trim() == "") {
                    alert("Informe o saldo da conta");
                    $("#saldoconta").focus();
                    return false;


                }
                if ($("#tipoconta").val().trim() == "") {
                    alert("selecione i tipo de Conta");
                    $("#tipoconta").focus();
                    return false;
                }
            }


        </script>

    </body>
</html>


