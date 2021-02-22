<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
    <link href="css/publique.css" rel="stylesheet">
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

     
     
     <form class="formulario" action="#">
        <div class="topo">
            <h2>Detalhes do Produto</h2>
        </div>

        <div class="grupos">
            <label >Título</label>
            <input type="text" name="text" placeholder="Nome do produto" id="titulo">
        </div>

        <div class="grupos">
            <label class="preco">Preço</label>
            <input type="text" name="text" class="preco" placeholder="R$">
        </div>

        <div class="grupos">
            <label >Cupom (Não Obrigatório)</label>
            <input type="text" name="text" class="preco" maxlength="6" placeholder="6 Dígitos">
        </div>

        <div class="grupos">
            <label">Descrição</label>
            <input type="text" name="text" id="descricao">
        </div>
        <div class="grupos">
            <button type="submit">ENVIAR</button>
        </div>
        
        <div class="parte-esquerda">
            <img class="img" src="midia/noimage.png">
            <div class="enviarimg">
            <label for="arquivo">Selecionar Imagem</label>
            <input type="file" name="arquivo" id="arquivo" >
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