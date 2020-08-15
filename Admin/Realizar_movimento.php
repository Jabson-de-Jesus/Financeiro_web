<?php 
   include_once '../Dao/Movimentacaodao.php';
   include_once './_Msg.php';
   
   if(isset($_POST['btncadas'])){
       
       $tipo = $_POST['tipo']; 
       $data = $_POST['data']; 
       $conta = $_POST['conta']; 
       $empresa = $_POST['empresa']; 
       $categoria = $_POST['categoria']; 
       $valor = $_POST['valor']; 
       $obs= $_POST['obs'];
       
       $dao = new Movimentacaodao();
       
       $resul = $dao->inserirmovimentacao($tipo, $data, $valor, $obs, $empresa, $categoria, $conta);
   }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_Head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php
            include_once '_topo.php';
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
                            <h2>Realizar movimento</h2>   
                            <h5>Aqui você podera lançar seus movimentos</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form action="Realizar_movimento.php" method="post"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>tipo de Movimento</label>
                            <select class="form-control"  id="tipomovi" name="tipo">
                                <option value=""> Selecione </option>
                                <option value="1"> Entrada </option>
                                <option value="2"> Saida </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Data</label>
                            <input type="date" class="form-control" id="data" name="data"> 
                        </div>

                        <div class="form-group">
                            <label>Conta</label>
                            <select class="form-control" id="conta" name="conta" >
                                <option value=""> Selecione </option>

                            </select>
                        </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Empresa</label>
                            <select class="form-control" id="empresa" name="empresa">
                                <option value=""> Selecione </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Categoria</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value=""> Selecione </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Valor</label>
                            <input type="text" class="form-control" id="valor" name="valor"> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>observção</label>
                            <textArea class="form-control" placeholder="Digite aqui....(opcional)" name="obs"></textArea> 
                         </div>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-success" name="btncadas" onclick="return ValidarCampos123()" >Cadastrar</button> 
                    </center>
                        </form>    
                </div>
                

            </div>

        </div>
       
        <script>
            function ValidarCampos() {

                if ($("#tipomovi").val().trim() == "") {

                    alert("Selecione o tipo de movimento");
                    $("#tipomovi").focus();
                    return false;

                }

                if ($("#data").val().trim() == "") {

                    alert("Selecione a Data");
                    $("#data").focus();
                    return false;
                }
                if ($("#conta").val().trim() == "") {

                    alert("Selecione a conta");
                    $("#conta").focus();
                    return false;

                }


                if ($("#empresa").val().trim() == "") {

                    alert("Selecione a Empresa");
                    $("#empresa").focus();
                    return false;

                }

                if ($("#categoria").val().trim() == "") {

                    alert("Selecione a Categoria");
                    $("#categoria").focus();
                    return false;

                }
                if ($("#valor").val().trim() == "") {

                    alert("Selecione a Categoria");
                    $("#valor").focus();
                    return false;

                }

            }

         </script>
        
    </body>
</html>