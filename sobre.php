<?php
    //Haverá estilização aqui também, mas no html lá em baixo, linkando o css
    //de um arquivo separado
    
    include_once "jogo/funcao.php";
    
    recomeca();
?>

<html>
    <header>
        <link rel="stylesheet" href="CSS/styles.css">
        <title>Futnator!</title>
    </header>
    
    <body >
        <div class='titulo'>
            <h1>
                Futnator <img src="imagens/bola.png"alt=”some text” width= 30 height=30>
            </h1>
        </div>
        
        
        <div class = 'cadastro-inicio'>
            <form action='./' method='post'>
                <div class="container">
                    <div class='propaganda'>
                        <h2>Adivinhador Futnator</h2>
                        <ul>
                            <li>
                                Desafie nosso adivinhador futebolístico, tendo em mente somente 
                                o personagem desejado
                            </li>
                            
                             <li>
                                Basta escolher entre jogador, estádio e time que realizaremos a nossa
                                mágica
                            </li>
                            
                            <img class='propaganda' src = '/imagens/futebol_ideia.jpg';>
                            
                            <button class='propaganda'>
                                Acesse gratuitamente
                            </button>
                            
                        </ul>
                        
                        
                    </div>
                    
                    <div class='cadastro envioInfo'>
                        <h2>
                            Fique por dentro!
                        </h2>
                        
                        <p>
                           Realize o cadastro abaixo para receber novidades via e-mail 
                        </p>
                        
                        <form class='addCarac'  method = 'post' action = 'novoPersonagem.php'>
                                <input type='hidden' name='personagemID' value='$personagemID'>
                                <label>Nome completo: </label><input type='text' name='nome'><br>
                                <label>Idade: </label><input type='text' name='idade'><br>
                                <label>E-mail: </label><input type='text' name='email'><br>
                                <button class = 'cadastrarEnvio' type='submit' name='cadastro' value='cadastro'>Cadastrar</button>
                        </form>
                        <p class='spam'>Prometemos que não utilizaremos essas informações para o envio de SPAM</p>
                        
                    </div>
                    
                </div>
            </form>
        </div>
        
        
        <!-- <p> <b>Um projeto acadêmico baseado no jogo 
                <a href="https://pt.akinator.com/">Akinator</a>
            , possuindo a mesma premissa de perguntas com três tipos de resposta.
            </b>
        </p> -->
    </body>
    
</html>

