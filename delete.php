<html>
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<nav  class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active"><a style="color: white;" class="nav-link" href="./create.php" target="blank">Cadastrar novo produto <span class="sr-only">(current)</span></a></li>
      <li class="nav-item active"><a style="color: white;" class="nav-link" href="./read.php" target="blank">Exibir itens cadastrados <span class="sr-only">(current)</span></a></li> 
</nav>

<div class="card" style="width: 18rem; margin-left: 35%; margin-top: 2%; margin-bottom: 7em; ">
        <div class="card-body">
        <form method="POST" class="form-group" >
        <h3 class="card-title">Deletar produto:</h3> <br>
        Informe o ID do produto: <input class="form-control" type="text" name="delete"><br>
        <input type="submit" value="Deletar" class="btn-success" > <br> <br>
    </form>
        </div>
    
    </div>
   
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark" ></nav>
</div>

   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
<?php

include "./connection.php";
$conn = getConnection();
$id = $_POST["delete"];
$remove = "DELETE FROM tb_produtos WHERE id = :id";
$stmt = $conn->prepare($remove);
$stmt->bindParam(":id", $id);
$stmt->execute();

