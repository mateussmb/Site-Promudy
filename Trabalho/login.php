<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">   

</head>
<body>
    <header id="cabe" >

    <div id="menu">
            

            <ul>
                
                <li><a href="#">CATEGORIAS</a></li>
                <li><a href="publique.php">PUBLICAR</a></li>
                <li><a href="login.php">ENTRAR</a></li>
            </ul>
            
        </div>
       
        <img src="midia/logobusca.png" id="busca">





<div id="logoname">


    <a href="home.php"> <img src="midia/logo.png" id="logo"> </a>

    <a href="home.php" >

     <h2 id="teste">Promudy</h2>
    </a>


     <a name="topo"></a>

</div>
</header>
  
    <form class="form1"action="">
    <div class="card">
        <img id="imglog"src="midia/user2.png">

        <div class="topocard">
            
            
            <h2 id="titulo">Já tenho conta</h2>
            </div>
            <div class="cardgrupo">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email..." required>
            </div>

            <div class="cardgrupo">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Digite seu email..." required>
            </div>

            <div class="cardgrupo">
                <label><input type="checkbox">Lembre-me</label>
            </div>

            <div class="cardgrupo">
                <button type="submit">ENTRAR</button>
            </div>
        </div>
    </form>
    
    <form class="formcadastro" method="post" action="php/processa.php">
    <div class="card">
        <div class="topocard">
            <h2 id="titulo">Criar conta</h2>
        </div> 
            <div class="cardgrupo">
                <label>Email</label>
                <input type="text" name="email" placeholder="Digite seu email..." required>
            </div>
            <div class="cardgrupo">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha..." required>
                
            </div>
                <div class="cardgrupo">
                <label>Repita a senha</label>
                <input type="password" name="senhal" placeholder="Repita a senha..." required>
                </div>
            <div class="cardgrupo"  >
                <button type="submit" value="salvar">CADASTRAR</button>    
            </div>      
        </div>
    </div>
    </form>

    <section id="rodape">
    </div>
        <div class="grupos-icones">
            <div class="icones">
            <a href="www.youtube.com">  <img src="midia/facebook (1).png" alt="instagram"> </a> 
            </div>
            
            <div class="icones">
            <a href="#">  <img href="#"src="midia/instagram (1).png" alt="instagram"> </a>
            </div>
    
            <div class="icones">
            <a href="#"> <img href="#"src="midia/twitter.png" alt="instagram"></a>
            </div>
    
            <p>Copyright (c) 2020 Promudy
                All Rights Reserved
                 
                This product is protected by copyright and distributed under
                licenses restricting copying, distribution, and decompilation.</p>
        </div>
    
        <div class="textorodape">
            
            <ul>
            <a href="sobre_nos.php"><li>Sobre nós</li></a>
                
            </ul>
        </div>
    </section>
</body>
</html>