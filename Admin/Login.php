<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_Head.php';
    ?>
    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2>Financeiro EAD</h2>

                    <h5>( Faça Seu login )</h5>
                    <br />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>   Entre com Seus Dados </strong>  
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <br />
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Seu E-Mail" id="email"  />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control"  placeholder="Sua Senha" id="senha"  />
                                </div>


                                <button class="btn btn-primary" onclick="return validarcampos()"> Acessar </button>
                                <hr />
                                Não tem Cadastro ? <a href="Cadastro.php" >Clique Aqui </a> 
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <script>

            function validarcampos() {

                if($("#email").val().trim() == "") {

                    alert("Preecher  o campo E_mail");
                    $("#email").focus();
                    return false;

                }
                if($("#senha").val().trim() == ""){
                     alert("Preencher o campo Senha");
                     $("#senha").focus();
                     return false;
                    
                }
                

            }

        </script>



    </body>
</html>

