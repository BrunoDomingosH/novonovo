<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];
include("conecta.php");

if (!empty($email) && !empty($senha)) {
    $comando = $pdo->prepare("SELECT * FROM cadastro WHERE email=:email AND senha=:senha");
    $comando->bindParam(":email", $email);
    $comando->bindParam(":senha", $senha);
    $resultado = $comando->execute();
    $linhas = $comando->fetchAll(); // Busca todas as linhas correspondentes

    if (count($linhas) > 0) {
        $nome = $linhas[0]["nome"];
        $_SESSION["logado"] = true;
        $_SESSION["nome"] = $nome;

        if ($email == "admin") {
            header("Location: pagina_adm.php");
        } else {
            header("Location: pagina_inicial.php");
        }
        exit; // Certifique-se de que o script não será executado além deste ponto
    } else {
        // Login ou senha incorretos
        header("Location: cadastro.php?erro=login");
        exit;
    }
} else {
    // Campos vazios
    header("Location: cadastro.php?erro=vazio");
    exit;
}
?>
