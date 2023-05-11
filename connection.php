<?php
#conexão com DB
function getConnection(){
    $db = "mysql:host=localhost;dbname=produtos";// banco:host=nome_servidor;dbname=nome_banco;
    $user = "root";//usuario
    $pass = ""; //senha 

#tratamento de erro 
try{
    $conn = new PDO($db, $user, $pass);
    return $conn;
    
}catch(PDOException $ex){
echo  "Erro ". $ex->getMessage();  
};


}