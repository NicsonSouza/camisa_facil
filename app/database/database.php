<?php

class Database{
    
    private $con;
    private $table;

    const HOST = 'localhost';
    const DB = 'produtos';
    const USER = 'root';
    const PASS = '1234';

    public function conexaoBD(){
        try{
            $this->con = new PDO('mysql:host='.self::HOST.'; dbname='.self::DB.'', self::USER, self::PASS);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo'Conexão realizada com sucesso!';
        }catch(Exception $e){
            echo 'Erro de conexão';
        }
    }

    public function __construct($table){
        $this->table = $table;
        $this->conexaoBD();
    }

    public function execute($query, $parametros = []){
        try{
            $stmt = $this->con = ($query);
            $stmt->execute($parametros);
            
            return $stmt;
            } catch(Exception $e){
                                 echo $e->getMessage();
                                 }
    }

    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');
        $query = 'INSERT INTO `'.$this->table.'` ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
        $this->execute($query, array_values($values));
        return $this->con->lastinsertId();
    }

    public function select($fields = '*'){
        $query = 'SELECT'.$fields.' FROM '.$this->table.';';
        $this->execute($query);
    }
    
}