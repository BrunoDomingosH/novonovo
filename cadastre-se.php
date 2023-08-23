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
                <div class="imagem_conta"><img class="imagem_conta" src="<?php echo( $imagem); ?>" width="100%"></div>
                <div class="nome_imagem"><?php echo( $texto); ?></div>
            </div> <br><br>
            <div class="menu_conta">  
            <a href="cadastro.php"> <div class="rodape2">Cadastro</div></a><br>
            <div class="rodape2">Escalação</div><br>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2">Dashboard</div><br>
            </div>  
        </div>

        <form action="crud.php" method="post" class="formu_tam">
        <div class="organizar">
            <div class="nome_texto">Conta Futville</div>
            <div class="nome_texto1">Uma só conta para todos os produtos Futville</div>
            <div class="login"> 
                <div class="divp3">
                    <div class=divp3><table>
                        <tr>
                          <td>Nome:</td>
                          <td><input class="caixa_de_resposta" type="text" name="nome" size="20"> <br /></td>
                        </tr>
                        <tr>
                          <td>Sobrenome:</td>
                          <td><input class="caixa_de_resposta" type="text" name="sobrenome" size="20"> <br /></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input class="caixa_de_resposta" type="text" name="email" size="20">  <br /></td>
                          </tr>
                          <tr>
                            <td>Senha:</td>
                            <td><input class="caixa_de_resposta" type="password" name="senha" size="20"> <br /></td>
                          </tr>
                        <tr>
                          <td>Data de nascimento:</td>
                          <td><input class="caixa_de_resposta" type="date" name="data_aniversario" size="20"> <br /></td>
                        </tr>
                       </table></div>
                </div>
            </div>
            <input type="submit" name="inserir" class="entrar"></input><br>
            <div class="cadastra">Já tem conta?<a href="cadastro.php">Entre.</a></div>
        </div>
        </form>

        



        
    <div class="rodape">© 2022-2023 FutVille FC - Liga Joinvilense de Futebol</div>
</body>
</html>