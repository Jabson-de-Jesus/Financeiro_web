<?php
include_once '../Dao/Contadao.php';

function tipoconta($tipocont) {
    if ($tipocont == 0) {
        return $tipocont = 'Conta Poupança';
    } else {
        return$tipocont = 'Conta Corrente';
    }
}

function tipocont1($tipoconta) {
    if ($tipoconta != 1) {
        return $tipoconta = 'Conta Corrente';
    } else {
        return $tipoconta = 'Conta Poupança';
    }
}
function retornavalor1($num) {
    if($num == 1){
        return $num = 1;
    }else{
         return $num = 0;
    }
    
}

function retornavalor($num) {
    if ($num == 0) {
        return $num = 0;
    } else {
        return $num = 1;
    }
}

if (isset($_GET['cod']) && $_GET['cod'] != '' && is_numeric($_GET['cod'])) {
    $dao = new Contadao();
    $idconta = $_GET['cod'];

    $dados = $dao->Detalheconta($idconta);
    if (count($dados) == 0) {

        header('location: conta_consultar.php');
    }
} else {

    header('location: conta_consultar.php');
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
                            <input class="form-control" placeholder="Digite aqui" name="conta" id="conta" value=<?= $dados[0]['numero_conta'] ?> />
                        </div>
                        <div class="form-group">
                            <label>Nome da Banco</label>
                            <input class="form-control" placeholder="Digite aqui" name="banco" id="banco" value=<?= $dados[0]['banco_conta'] ?> />
                        </div>
                        <div class="form-group">
                            <label>Saldo da Conta</label>
                            <input class="form-control" placeholder="Digite aqui" name="saldoconta" id="saldoconta" value=<?= $dados[0]['saldo_conta'] ?>  />
                        </div>
                        <div class="form-group">

                            <select class="form-control" name="tipoconta">

                                <option value="<?= retornavalor($dados[0]['tipo_conta']) ?>"><?= tipoconta($dados[0]['tipo_conta']) ?> </option>
                                <option value="<?= retornavalor1($dados[0]['tipo_conta']) ?>"> <?= tipocont1($dados[0]['tipo_conta']) ?> </option>
                            </select>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnalterar" onclick="return ValidarCampos123()">Alterar</button>
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


