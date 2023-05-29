<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Quiz sobre Música</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style type= "text/css">
         .principal
            {
                background-color: pink;
                border: 2px solid black; 
                text-align: center;
                color: black;
                width: 500px;
            }
            
   .rodape{
    background-color: #f36e20;
    color: white;
    height: auto;
    width: 100%;
    font-size: 14px;
    font-family: helvetica;
    }

    .rodape a{
    text-decoration: none;
    color: white;
    }
    .rodape p{
        margin-bottom: 5px;
    }
    .rodape-div{
        display: flex;
        flex-wrap: wrap;
        width:100%;
        margin: auto;
        align-items: stretch;
        padding: 60px 10px 40px 10px;
    }
    .rodape-div-1, .rodape-div-4{
        display: flex;
        width: calc(100% / 4 - 20px);
        padding: 10px;
    }
    .rodape span{
    font-size: 20px;
    color: white;
    }
    .rodape-direitos{
        width: calc(100% - 20px);
        background-color: black;
        padding: 10px;
        margin: 0px;
        text-align: center;
    }
    .rodape-div-2{
        text-align = left;
    }
    </style>
</head>
<body>
    <div class = "principal">
    <form action="">
    <h1>
        QUAL É A MÚSICA?
    </h1>
    <p> 
    <label for="nome">Digite seu nome: </label> 
    <input type="text" name="nome" id="nome"/>
    </p>
    <footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <p>Trabalho para a disciplina de Programação para Internet</p>
                <p>Professor: Eberton Marinho</p>
                <p>Unidade 1</p>
            </div>
        </div>

    <div class="rodape-div-2">
        <div class="rodape-div-3-coluna">
            <p>Desenvolvedores:</p>
            <p>Alexandra Galvão -<a href="#empresa"> alexandra.galvao@escolar.ifrn.edu.br</a></p>
            <p>Eliel Ewerton -<a href="#sobre"> eliel.ewerton@escolar.ifrn.edu.br</a></p>
            <p>Iasmim Dias -<a href="#sobre"> iasmim.dias@escolar.ifrn.edu.br</a></p>
            <p>João Victor Lima -<a href="#sobre"> victor.lima@escolar.ifrn.edu.br</a></p>
            <p>Kaliny Gomes -<a href="#sobre"> kaliny.g@escolar.ifrn.edu.br</a></p>
        </div>
    </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>
    
    </form>
    </div>
    
    
</body>
</html>