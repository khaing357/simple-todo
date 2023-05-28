<?php

class QueryBuilder
{   
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function selectAll($table)
    {
        $statement=$this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr,$table)
    { 
        //e.g insert into $tasks(description) values ("reading")
        $getDataKeys=array_keys($dataArr);
        $cols=implode(",",$getDataKeys);
        $questionMark="";
        foreach($getDataKeys as $key){
            $questionMark.="?,";
        }
        $questionMark=rtrim($questionMark,",");
        $query="insert into $table($cols) values ($questionMark)";
        $statement=$this->pdo->prepare($query);
        $getDataValues=array_values($dataArr);
        $statement->execute($getDataValues);   
    }
}