<?php
       include_once '../Dao/Contadao.php';
       include_once './_Msg.php';
      
       if(isset($_POST['btncadastrar'])){
               $conta = $_POST['conta'];
               $banco = $_POST['banco'];
               $saldoconta = $_POST['saldoconta'];
               $tipoconta = $_POST['tipoconta'];
               
               $objdao = new Contadao();
               
               $resul = $objdao->Inserirconta($conta, $banco, $saldoconta, $tipoconta);
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
                            
                            <h2>Nova Conta</h2>   
                            <h5>Aqui você cadastra suas Contas </h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form action="Conta_nova.php" method="post">
                    <div class="form-group">
                        <label>Numero da conta</label>
                        <input class="form-control" placeholder="Digite aqui" name="conta"/>
                    </div>
                    <div class="form-group">
                        <label>Nome da Banco</label>
                        <input class="form-control" placeholder="Digite aqui" name="banco" />
                    </div>
                    <div class="form-group">
                        <label>Saldo da Conta</label>
                        <input class="form-control" placeholder="Digite aqui" name="saldoconta" />
                    </div>
                    <div class="form-group">
                        <label>tipo de Conta</label>
                        <select class="form-control" name="tipoconta">
                            <option value="">Selecione</option>
                            <option value="1">Conta Corrente</option>
                            <option value="2">Conta poupança</option>
                        </select>
                    </div>
                      <hr />
                      <button type="submit" class="btn btn-success" name="btncadastrar">Cadastrar</button> 
                    </form> 
                </div>
              
            </div>
                
        </div>
       
    </body>
</html>
