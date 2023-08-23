<?php 
    $nome=$_POST["nome"];
    $sobrenome=$_POST["sobrenome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $data_aniversario=$_POST["data_aniversario"];
    include("conecta.php");
    
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO cadastro VALUES('','$nome','$sobrenome','$email','$senha','$data_aniversario')" );
        $resultado = $comando->execute();
        header("Location:cadastro.php");
    }

?>