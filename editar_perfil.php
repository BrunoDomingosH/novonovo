<?php
session_start();

if (!isset($_SESSION["nome"])) {
    header("Location:pagina_de_login.php"); // Redirecionar se não estiver logado
    exit();
}

include("conecta.php");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario_id = $_SESSION["usuario_id"];
    
    // Processar o upload da nova imagem de perfil
    // ...

    if ($upload_sucesso) { // Verifique se o upload foi bem-sucedido
        // Atualizar o caminho da imagem no banco de dados para o usuário atual
        $atualizar_imagem = "UPDATE cadastro SET imagem_perfil = ? WHERE id = ?";
        $resultado = $pdo->prepare($atualizar_imagem)->execute([$caminho_nova_imagem, $usuario_id]);

        if ($resultado) {
            $mensagem = "Imagem de perfil atualizada com sucesso!";
        } else {
            $mensagem = "Erro ao atualizar a imagem de perfil.";
        }
    } else {
        $mensagem = "Erro no upload da imagem.";
    }
}

$imagem_perfil = "caminho_padrao_da_imagem"; // Defina um valor padrão ou use o valor do banco de dados

// ...
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Seus cabeçalhos aqui -->
</head>
<body>
    <h1>Editar Perfil</h1>
    <p><?php echo $mensagem; ?></p>

    <div class="imagem_conta">
        <img class="imagem_conta" src="<?php echo $imagem_perfil; ?>" width="100%">
    </div>

    <form action="editar_perfil.php" method="post" enctype="multipart/form-data">
        <input type="file" name="nova_imagem_perfil" accept="image/*">
        <input type="submit" value="Enviar">
    </form>

    <!-- ... -->

</body>
</html>
