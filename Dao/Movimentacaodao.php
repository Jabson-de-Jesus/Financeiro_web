<?php
   require_once 'Ultildao.php';
   require_once 'Conexao.php';

class Movimentacaodao extends Conexao {

    public function inserirmovimentacao($tipo, $data, $conta, $empresa, $categ, $valor, $obs) {
        
                  if(trim($tipo) == '' || trim($data) == '' || trim($conta) == '' || trim($empresa) == '' || trim($categ) == '' || trim($valor) == '' || trim($obs) == '') {
                      
                      return 0;
                  }
                
            $conexao = parent:: retornaConexao();
            
            $comando = 'insert into tb_movimento(tipo_movimento, data_movimento, valor_movimento, observacao_movimento, id_empresa, id_categoria, id_conta, id_usuario)values(?, ?, ?, ?, ?, ?, ?, ?)';
        
            $sql = new PDOStatement();
            
            $sql = $conexao->prepare($comando);
            
            $sql->bindValue(1, $tipo);
            $sql->bindvalue(2, $data);
            $sql->bindValue(3, $valor);
            $sql->bindValue(4, $obs);
            $sql->bindValue(5, $empresa);
            $sql->bindValue(6, $categ);
            $sql->bindValue(7, $conta);
            $sql->bindValue(8, Ultildao::Codigologado());
            try {
                $sql->execute();
                
                return 1;
            } catch (Exception $ex) {
                
                return -1;
            }
    }
    
    
    public function consultarmovimento($tipo, $data1, $data2){
        
            if(trim($tipo) == '' || trim($data1) == '' || trim($data2) == ''){
                
                    return 0;
                
            } 
        
    }
}
