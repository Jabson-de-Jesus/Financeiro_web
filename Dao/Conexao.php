<?php

// Configurações do site----------------  
define('HOST', '127.0.0.1'); //IP
define('USER', 'root'); //usuario
define('PASS', NULL); //Senha
define('DB', 'db_financeiro'); //Banco


class Conexao {

    /** @var PDO */
    private static $Connect;

    private static function Conectar() {
        try {

            
            if (self::$Connect == null):

                $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
                self::$Connect = new PDO($dsn, USER, PASS, null);
            endif;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
       
        //Seta os atributos para que seja retornado as excessões do banco
        self::$Connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
        return  self::$Connect;
    }

    public function retornaConexao() {
        return  self::Conectar();
    }
    
    
}