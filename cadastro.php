<?php 
session_start();
if (!isset($_SESSION["nome"]))
{
        $texto="Faça login";
        $imagem="img/perfilsemfoto.png";
}
else
{
    $texto=$_SESSION["nome"];
    $imagem="img/imagem_conta.jpg";
}    

$erroLogin = $_GET["erroLogin"] ?? "";
$erroVazio = $_GET["erroVazio"] ?? "";
    
$usuarioLogado = isset($_SESSION["logado"]) && $_SESSION["logado"] === true;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODAPE TESTE</title>
    <script src="rodape.js"></script>
    <link rel="stylesheet" href="cadastro.css">
    
    
</head>
<body>
    
    <div class="cabecalho">
        <div class="logo" onclick="Aparecer();"> 
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="logo"><a href="pagina_inicial.php"><img src="img/LOGO FUT VILLE.png" width="280px"></div></a>
        <div class="logo"><img src="img/noti.png" width="20px"></div>
    </div>


        <div class="lateral" id="lateral">
            <div onclick="Fechar();" class="fechar"><img src=img/x.png width="20px"></div> <br>
            <div class="foto_conta">
                <div class="imagem_conta"><a href="editar_perfil.php"><img class="imagem_conta" src="<?php echo( $imagem); ?>" width="100%"></div></a>
                <div class="nome_imagem"><?php echo( $texto); ?></div>
            </div> <br><br>
            <div class="menu_conta">  
            <a href="cadastro.php"> <div class="rodape2">Cadastro</div></a><br>
            <div class="rodape2">Escalação</div><br>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2">Dashboard</div><br>
            
            <?php if ($usuarioLogado): ?>
            <a href="logout.php" class="logout-button">
            <span class="logout-icon"></span> Sair
            </a>
             <?php endif; ?>


            </div>  
        </div>
        
            <div class="organizar">
                <form action="login.php" method="post" class="organizar">
                <div class="nome_texto">Conta Futville</div>
                <div class="nome_texto1">Uma só conta para todos os produtos Futville</div><br>
                <div class="caixa_de_resposta"> 
             E-mail<br><input name="email" class="caixa_de_resposta" type="text"><br>
             Senha<br><input name="senha" class="caixa_de_resposta" type="password"><br>
                </div>



                <!-- Se houver erro de login, exibir a mensagem -->
    <?php if (!empty($erroLogin)) : ?>
        <p><?php echo $erroLogin; ?></p>
    <?php endif; ?>

    <!-- Se houver erro de campos vazios, exibir a mensagem -->
    <?php if (!empty($erroVazio)) : ?>
        <p><?php echo $erroVazio; ?></p>
    <?php endif; ?>







                <input name="Entrar" type="submit" class="entrar"></input><br>
                <div class="cadastra">Não tem conta?<a href="cadastre-se.php">CADASTRE-SE.</a></div>
            </div>
        </form>

        



        
    <div class="rodape">© 2022-2023 FutVille FC - Liga Joinvilense de Futebol</div>
</body>
</html>