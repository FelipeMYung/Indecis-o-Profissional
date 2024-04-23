<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <button id="drawer">
        <div class="iconmenu"></div>
        <div class="iconmenu"></div>
        <div class="iconmenu"></div>
        </button>
        <div class="menu">
            <button id="drawer2">
            VOLTAR
            </button>
            <ul>
            <a href="index.php"><li>Pagina inicial</li></a>
            <a href="testeVocacional.php"><li>Teste Vocacional</li></a>
            <a href="#"><li>Artigo de Opinião</li></a>
        </ul>
        </div>
    </header>
    <main id="Teste">
        <h1>Teste Vocacional:</h1>
        <h2 class="Pergunta">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quam, sit nemo? </h2>
        <div id="respostas_teste">
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">Opção 1</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">Opção 2</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Opção 3</label>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">Opção 4</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">opção 5</label>
            <button id="enviar">Enviar</button>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>