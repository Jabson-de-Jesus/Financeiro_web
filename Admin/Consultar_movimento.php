<?php  
 
include_once '../Dao/Movimentacaodao.php';
include_once './_Msg.php';     

if(isset($_POST['btnpesquisar'])){
        
         $tipo = $_POST['tipo'];          
         $data1 = $_POST['data1'];
         $data2 = $_POST['data2'];
         
         $objmovi = new Movimentacaodao();
         
         $resul = $objmovi->consultarmovimento($tipo, $data1, $data2);
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
                            <h2>Consultar Movimento</h2>   
                            <h5>Aqui você Consulta / Excluir Movimento</h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form action="Consultar_movimento.php" method="post">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Tipo</label>
                            <select class="form-control" id="tipo" name="tipo" >
                                <option value="">Selecione</option>
                                <option value="0">Todos</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saida</option>
                               
                            </select>

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <label>Data inicial</label>
                        <input type="date" class="form-group" id="data1" name="data1"/>
                    </div>

                    <div class="col-lg-6">
                        <label>Data Final</label>
                        <input type="date" class="form-group" id="data2" name="data2"/>
                    </div>

                    <br />
                    <button type="submit" class="btn btn-success" name="btnpesquisar" onclick="return ValidarCampos()12">Pesquisar</button> 
                    </form>

                    <hr />        
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Contas Cadstradas
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>tipo</th>
                                                    <th>Data</th>
                                                    <th>Categoria</th>
                                                    <th>empresa</th>
                                                    <th>conta</th>
                                                    <th>observação</th>
                                                    <th>ação</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>tipo</td>
                                                    <td>data</td>
                                                    <td>categoria</td>
                                                    <td>empresa</td>
                                                    <td>conta</td>
                                                    <td>observação</td>


                                                    <td>
                                                        <button  class="btn btn-danger btn-xs" >Excluir</button>
                                                    </td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
            function ValidarCampos() {
  
               
                if ($("#tipo").val().trim() == "") {
                    alert("Selecionar tipo de operação");
                    $("#tipo").focus();
                    return false;

                }


                if ($("#data1").val().trim() == "") {
                    alert("Inserir Data");
                    $("#data1").focus();
                    return false;
                }
                if ($("#data2").val().trim() == "") {
                    alert("Inserir Data");
                    $("#data2").focus();
                    return false;
                }

            }


        </script>

    </body>
</html>

