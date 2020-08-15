<?php
         include_once '_Msg.php';
         include_once '../Dao/Empresadao.php';
         
         if(isset($_POST['btncadastrar'])){
                  
                $nome= $_POST['nome'];
                $tel= $_POST['tel'];
                $end= $_POST['end'];
                
                $objdal = new Empresadao();
                
                $resul = $objdal->InserirEmp($nome, $tel, $end);
                
               
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
                            <h2>Nova Empresa</h2>   
                            <h5>Aqui você Cadastra sua Empresa </h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form action="Empresa_nova.php" method="post">
                    <div class="form-group">
                        <label>Nome da Empresa</label>
                        <input class="form-control" placeholder="Digite aqui" name="nome"  />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite aqui" name="tel"  />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite aqui" name="end" />
                    </div>
                        <button type="submit" class="btn btn-success" name="btncadastrar">Cadastrar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
                 
                 function ValidarCampos(){
                     
                     if ($("#nome").val().trim() == "") {
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
