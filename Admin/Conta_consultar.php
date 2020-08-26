<?php
    
   require_once '../Dao/Contadao.php';;
    
   $objdal = new Contadao();
   
   $conta = $objdal->consultarconta();
  

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
                            <h2>Consultar Conta</h2>   
                            <h5>Aqui você Comsulta / Altera sua Empresa </h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Contas Cadstradas
                                </div>
                                <form action="Conta_consultar.php" method="post" >
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Numero</th>
                                                    <th>Banco</th>
                                                    <th>Saldo</th>
                                                    <th>tipo</th>
                                                    <th>Ação</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                         <?php for ($i = 0; $i < count($conta); $i++) { ?>
                                                <tr class="odd gradeX">
                                                    <td> <?= $conta[$i]['numero_conta']?> </td>
                                                  <td> <?= $conta[$i]['banco_conta']?> </td>
                                                   <td>R$ <?= $conta[$i]['saldo_conta']?> </td>
                                                  <td> <?= $conta[$i]['tipo_conta'] == 0 ? 'Conta-Poupança' : 'Conta-Corrente' ?> </td>
                                                   
                                                    
                                                    <td>
                                                        <a  href="Conta_alterar.php?cod=<?= $conta[$i]['id_conta'] ?>" class="btn btn-warning btn-xs" >Alterar</a>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                 <?php } ?>
                                               
                                                    
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                </form>  
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


    </body>
</html>

