<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?t=<?php echo date("YmdHis").rand(1,9999999)?>"/>
     
</head>
   
<body>
  <script src="script.js"></script>
    <header >
    <button id="drawer">
      <div class="iconmenu"></div>
      <div class="iconmenu"></div>
      <div class="iconmenu"></div>
    </button>
    <h1>Indecisão Profissional na adolecência</h1>
    <div class="menu">
        <button id="drawer2">
          VOLTAR
        </button>
        <ul>
        <a href="index.php"><li>Pagina inicial</li></a>
        <a href="testeVocacional.php"><li>Teste Vocacional</li></a>
        <a href="artigo.pdf"><li>Artigo de Opinião.</li></a>
      </ul>
    </div>
 
    </header>
    <main>
      <div class="mid" class="bg-transparent"  >
        <h2 class="display-1">Resumo do Projeto</h2>
        <p class="lead" class="text">nosso projeto é mt bom, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi dolorum possimus amet debitis a consequuntur deserunt explicabo, cumque voluptates repudiandae. Repellat, adipisci? Perspiciatis nihil ipsa hic quia itaque! Aliquam, blanditiis.</p>
        <hr class="my-3">
        <button type="button" class="btn-lg btn-block" class="bota">Vizualizar Artigo do Projeto</button>
      </div>
      <div class="mid" class="bg-transparent"  >
        <h2 class="display-1">Resumo do Teste</h2>
        <p class="lead" class="text">O que são testes de API? Os desenvolvedores fazem testes para saber se as APIs atendem às expectativas quanto a funcionalidade, desempenho, confiabilidade e segurança. A intenção é encontrar bugs e outros comportamentos inesperados para que os usuários não recebam um produto ruim ou perigoso.</p>
        <hr class="my-3">
        <button type="button" class="btn-lg btn-block" class="bota" >Vizualizar Teste</button>
      </div>
    </main>
    
    <footer>
      <p>Feito por:</p>
      <div>
        <p>Felipe Martins Yung</p>
        <img  src="/img/25231.png" alt="">
        <p>Gabriel de Souza Zeferino</p>
        <img src="/img/25231.png" alt="">
        <p>Roberto Moura Leitão</p>
        <img src="/img/25231.png" alt="">
      </div>
      <div>

      </div>
    </footer>
</body>
</html>