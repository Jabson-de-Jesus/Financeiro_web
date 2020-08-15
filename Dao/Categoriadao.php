<?php

require_once 'Ultildao.php';
require_once 'Conexao.php ';

class Categoriadao extends Conexao {

    public function InsertCategoria($nome) {

        if (trim($nome) == '') {
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando = 'insert into tb_categoria(nome_categoria, id_usuario) values(?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, Ultildao::Codigologado());
        try {
            $sql->execute();

            return 1;
        } catch (Exception $exc) {

            return -1;
        }
    }

    public function Alterarcategoria($nome, $cod) {

        if (trim($nome) == '') {
            return 0;
        }
    }

    public function Consultarcategoria() {

        $conexao = parent::retornaConexao();

        $comando = 'select id_categoria, nome_categoria from tb_categoria where id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->bindValue(1, Ultildao::Codigologado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function Detalhecategoria($idcategoria) {

        $conexao = parent::retornaConexao();

        $comando = 'select id_categoria, nome_categoria from tb_categoria where id_usuario = ? and id_categoria = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando);

        $sql->bindValue(1, Ultildao::Codigologado());
        $sql->bindValue(2, $idcategoria);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

}
