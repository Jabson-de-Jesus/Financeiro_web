


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
                            <h2>Consltar Empresa</h2>   
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
                                                <tr class="odd gradeX">
                                                    <td>Numero</td>
                                                    <td>Banco</td>
                                                    <td>Saldo</td>
                                                    <td>tipo</td>
                                                    
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

