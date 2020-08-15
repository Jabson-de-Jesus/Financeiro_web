<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_Head.php';
    ?>
    <body>
        <div class="container">
            <div class="row text-center  ">
                <div class="col-md-12">
                    <br /><br />
                    <h2> Financeiro : Cadastro</h2>

                    <h5>( Faça seu Cadastro )</h5>
                    <br />
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> Preencha todos os Campos  </strong>  
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <br/>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Seu Nome" id="nome" />
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" placeholder="Seu Email" id="email" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control" placeholder="Crie uma senha" id="senha" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control" placeholder="Repita A Senha"  id="rptsenha"/>
                                </div>

                                <button class="btn btn-success" onclick="return ValidarCampos()">Acessar </button>
                                <hr />
                                Ja Possui Cadastro ?  <a href="Login.php" >Clique aqui</a>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <script>

            function ValidarCampos() {

                if ($("#nome").val().trim() == "") {

                    alert("Preecher  o campo Nome");
                    $("#nome").focus();
                    return false;

                }

                if ($("#email").val().trim() == "") {

                    alert("Preecher  o campo Email");
                    $("#email").focus();
                    return false;

                }

                if ($("#senha").val().trim() == "") {
                    alert("preencher  campo Senha");
                    $("#senha").focus();
                    return false;
                }

                if ($("#senha").val().trim().length < 6) {
                    alert("crie uma nova senha com minimo 6 caracteres");
                    $("#senha").focus();
                    return false;
                }

                if ($("#rptsenha").val().trim() == "") {
                    alert("preencher  campo Repita senha");
                    $("#rptsenha").focus();
                    return false;
                }
                
                if ($("#senha").val().trim() != $("#rptsenha").val().trim()) {
                    alert("A senha e repitir senha não confere");
                    $("#senha").focus()
                    return false;
                }


            }




        </script>

    </body>
</html>
