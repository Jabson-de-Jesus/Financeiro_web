<?php

require_once 'Ultildao.php';
require_once 'Conexao.php';
 
class Empresadao extends Conexao {

    public function InserirEmp($nome, $tel, $end) {

        if (trim($nome) == '' || trim($tel) == '' || trim($end ) == '') {

            return 0;
        } else{
            $conexao = parent::retornaConexao();

            $comando = 'insert into tb_empresa(nome_empresa, telefone_empresa, endereco_empresa, id_usuario) values(?, ?, ?, ?)';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando);
            
            $sql->bindValue(1, $nome);
            $sql->bindValue(2, $tel);
            $sql->bindValue(3, $end);
            $sql->bindValue(4, Ultildao::Codigologado());

            try {

                $sql->execute();
               
                return 1;
            } catch (Exception $ex) {
                return -1;
            }
        }
    }

    public function alterarEmp($cod, $nome, $tel, $end) {
        if (trim($nome) == '' || trim($tel) == '' || trim($end) == '') {
            return 0;
        }
        $conexao = parent:: retornaConexao();
        $comando  = 'select '
        
    }

}
