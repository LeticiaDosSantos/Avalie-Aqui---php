<?php

$dbHost = '';
$dbUsuario = 'root';
$dbSenha = '';
$dbNome = 'avalie-aqui';

$mysqli = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbNome);
class Banco
{
    private static $dbNome = 'avalie-aqui';
    private static $dbHost = '';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome."; charset=utf8" , self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
