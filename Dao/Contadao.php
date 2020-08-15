<?php

require_once  'Ultildao.php';
require_once 'Conexao.php ';

class Contadao extends Conexao {

    public function Inserirconta($conta, $banco, $saldoconta, $tipoconta ) {

        if (trim($conta) == '' || trim($banco) == '' || trim($saldoconta) == '' || trim($tipoconta) == '') {

            return 0;
        }
                $conexao = parent:: retornaConexao();

            $comando = 'insert into tb_conta(numero_conta, banco_conta, saldo_conta, tipo_conta, id_usuario) values (?, ?, ?, ?, ?)';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando);
            
            $sql->bindValue(1, $conta); 
            $sql->bindValue(2, $banco);
            $sql->bindValue(3, $saldoconta);
            $sql->bindvalue(4, $tipoconta);
            $sql->bindValue(5, Ultildao::Codigologado());
            try {
                $sql->execute();
                
                return 1;
                
            }  catch (Exception $ex) {
                return -1;
            }
        }
   

    public function alterarconta($cod, $conta, $banco, $saldoconta, $tipoconta) {

        if (trim($conta) == '' || trim($conta) == '' || trim($saldoconta) == '' || trim($tipoconta) == '') {
            return 0;
        }
    }

}
