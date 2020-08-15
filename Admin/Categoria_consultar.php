<?php
require_once '../Dao/Categoriadao.php';

$objdao = new Categoriadao();

$categoria = $objdao->Consultarcategoria();


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
                            <h2>Consultar Categoria</h2>   
                            <h5>Aqui você Consulta / Altera sua Categoria </h5>

                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Categoria Cadastradas
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <form method="post" action="categoria_consultar.php"> 
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Nome</th>
                                                        <th>Ação</th>

                                                    </tr>
                                                </thead>
                                                <tbody> 

                                                    <?php for ($i = 0; $i < count($categoria); $i++) { ?>

                                                        <tr class="odd gradeX">
                                                            <td> <?= $categoria[$i]['id_categoria'] ?>  </td>
                                                            <td> <?= $categoria[$i]['nome_categoria'] ?></td>

                                                            <td>
                                                                <a  href="Categoria_alterar.php?cod=<?=$categoria[$i]['id_categoria']?>" class="btn btn-warning btn-xs" >Alterar</a>
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

