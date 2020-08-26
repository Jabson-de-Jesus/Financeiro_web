<?php
include_once '../Dao/Empresadao.php';
include_once './_Msg.php';

$objdao = new Empresadao();

$empresa = $objdao->Consultarempresa();


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
                                        <form method="post" action="Empresa_consultar.php">
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

                                                    
                                                       <?php for ($i = 0; $i < count($empresa); $i++) { ?>
                                                        <tr class="odd gradeX">

                                                            <td><?= $empresa[$i]['nome_empresa'] ?> </td>
                                                            <td><?= $empresa[$i]['telefone_empresa'] ?> </td>
                                                            <td><?= $empresa[$i]['endereco_empresa'] ?> </td>
                                                            <td>
                                                                <a  href="Empresa_alterar.php?cod=<?= $empresa[$i]['id_empresa']?>" class="btn btn-warning btn-xs" >Alterar</a>
                                                            </td>

                                                        </tr>

                                                       <?php } ?>

                                                </tbody>
                                            </table>
                                        </form>    
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

