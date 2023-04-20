<?php
#conexão com DB
function getConnection(){
$db = "mysql:host=localhost;dbname=produtos";
$user = "root";
$pass = "";

#tratamento de erro 
try{
    $conn = new PDO($db, $user, $pass);
    return $conn;
}catch(PDOException $ex){
echo  "Erro ". $ex->getMessage();  
};


}