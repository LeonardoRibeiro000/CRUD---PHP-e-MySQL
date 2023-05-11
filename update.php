<html>
    
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<nav  class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a style="color: white;" class="nav-link" href="./read.php" target="blank">Exibir itens cadastrados <span class="sr-only">(current)</span></a></li>
      <li class="nav-item active"><a style="color: white;" class="nav-link" href="./delete.php" target="blank">Deletar um produto <span class="sr-only">(current)</span></a></li>
      <li class="nav-item active"><a style="color: white;" class="nav-link" href="./update.php" target="blank">Editar um produto <span class="sr-only">(current)</span></a></li>
      
</nav>
<div class="card" style="width: 18rem; margin-left: 35%; margin-top: 2%; margin-bottom: 7em; ">
        <div class="card-body">
        <form method="POST" class="form-group"  action="update.php">
        <h3 class="card-title">Alterar produto:</h3> <br>
        ID: <input class="form-control" type="number" name="id">
        Descrição: <input class="form-control" type="text" name="desc">
        Qtd: <input class="form-control" type="number" name="qtd">
        Valor: <input class="form-control" type="number" name="valor"><br>
        <input type="submit" value="Alterar" class="btn-success" > <br> <br>
      
    </form>
        </div>
    
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

<?php
include "./connection.php";

$conn = getConnection();
$descricao = $_POST["desc"];
$qtd = $_POST["qtd"];
$valor = $_POST["valor"];
$id = $_POST["id"];

$update = $conn->prepare("UPDATE tb_produtos SET descricao = :desc, qtd = :qtd, valor = :valor WHERE id = :id");
    $update->bindParam(":desc", $descricao);
    $update->bindParam(":qtd", $qtd);
    $update->bindParam(":valor", $valor);
    $update->bindParam(":id", $id);
    $success = $update->execute();
if(isset($success)) {
    echo '<script>alert("Produto alterado com sucesso")</script>';
}else{
    echo "Error";
}








