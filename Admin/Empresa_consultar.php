<?php  
    
 include_once '';
 

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
                            <h2>Consultar Empresa</h2>   
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
                                    Empresas Cadastradas
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Endereço</th>
                                                    <th>Telefone</th>
                                                    <th>Ação</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr class="odd gradeX">
                                                    <td>Nome</td>
                                                    <td>Endereço</td>
                                                    <td>Telefone</td>
                                                    <td>
                                                        <a  href="Empresa_alterar.php" class="btn btn-warning btn-xs" >Alterar</a>
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


    </body>
</html>

