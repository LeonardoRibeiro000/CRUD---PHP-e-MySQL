<?php
include "./connection.php";

$conn = getConnection();

$read = $conn->prepare("SELECT * FROM tb_produtos ORDER BY  id");
$read->execute();
$results = $read->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($results);



