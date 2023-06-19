
<?php
    $resposta = 1;
    $placar = 0;
    $msg = '';
    $ordemq = 0;
    $placar = 0;

    #Q1
    $questao[0]['perguntas'] = "Descubra a música:";#Não Sei o Quê Lá
    $questao[0][0] = array("Assunto Delicado", false);
    $questao[0][1] = array("Não Sei o Quê Lá", true);
    $questao[0][2] = array("Esqueça-me Se For Capaz", false);
    $questao[0][3] = array("Presepada", false);

    #Q2
    $questao[1]['perguntas'] = "Quem canta essa música? ";#Basiquinho
    $questao[1][0] = array("Igunhi & Lulinha", false);
    $questao[1][1] = array("Matheus & Kauan", true);
    $questao[1][2] = array("Zé Neto & Cristino", false);
    $questao[1][3] = array("Victor & Leo", false);

    #Q3
    $questao[2]['perguntas'] = "Complete a música “Beijou Meia Cidade”:";
    $questao[2][0] = array("Beijou meia cidade pra esquecer, não esqueceu", false);
    $questao[2][1] = array("Cê pega todo mundo, mas não pega eu", false);
    $questao[2][2] = array("Beijou meia cidade pra esquecer, não teve sorte", true);
    $questao[2][3] = array("Beija a outra metade, quem sabe resolve", false);

    #Q4
    $questao[3]['perguntas'] = "Que música é esta? ";#Oi Balde - Zé neto e cristiano)
    $questao[3][0] = array("Me Devolve Pros Rolês", false);
    $questao[3][1] = array("Ela e Ela", false);
    $questao[3][2] = array("Oi Balde", true);
    $questao[3][3] = array("Me Bloqueia", false);

    #Q5
    $questao[4]['perguntas'] = "Descubra a música: ";#Evidências
    $questao[4][0] = array("Borboletas", false);
    $questao[4][1] = array("Eu Menti", false);
    $questao[4][2] = array("Página Virada", false);
    $questao[4][3] = array("Evidências", true);

    #Q6
    $questao[5]['perguntas'] = "Complete a música “Meio Termo”:";
    $questao[5][0] = array("Se cê não quiser nada sério, eu espero", true);
    $questao[5][1] = array("Nao tem meio termo, eu não sou bagunça", false);
    $questao[5][2] = array("Se não quer nada sério, eu espero", false);
    $questao[5][3] = array("Se não levar a gente a sério, alguém vai levar", false);

    #Q7
    $questao[6]['perguntas'] = "Quem canta essa música?";#Assunto Delicado 
    $questao[6][0] = array("Marília Mendonça, Maiara & Maraisa", true);
    $questao[6][1] = array("Marília Mendoça, Simone & Simaria", false);
    $questao[6][2] = array("Ludmilla, Marília Mendonça", false);
    $questao[6][3] = array("Henrique & Juliano, Marília Mendonça", false);

    #Q8
    $questao[7]['perguntas'] = "Complete a música “Leão”:";
    $questao[7][0] = array("Minha mulher, menina", false);
    $questao[7][1] = array("Me ensina a ser vida louca", false);
    $questao[7][2] = array("Teu olho piscina me afoa e faz boca a boca", false);
    $questao[7][3] = array("Me assassina, me beija na boca", true);

    #Q9
    $questao[8]['perguntas'] = "Quem canta essa música?";#Borboletas 
    $questao[8][0] = array("Chitâozinho & Xororó", false);
    $questao[8][1] = array("Victor & Leo", true);
    $questao[8][2] = array("Matheus & Kaua", false);
    $questao[8][3] = array("Jorge & Mateus", false);

    #Q10
    $questao[9]['perguntas'] = "Complete a música “Amigo Emprestado”:";
    $questao[9][0] = array("Mandou um sorriso e acertou meu ponto fraco", false);
    $questao[9][1] = array("Se ele, que é amigo, esqueceu, imagina eu", true);
    $questao[9][2] = array("É uma bebendo, um querendo e os dois alcoolizados", false);
    $questao[9][3] = array("Eu tô pegando seu amigo emprestado", false);

    if(isset($_POST['continuar'])){
        $resposta=$_POST['continuar'];

        if (isset($_POST["ordemq"])){
            $ordemq = $_POST["ordemq"] + 1;
        }

        if (isset($_POST["questao"])){
            $questao1=($_POST["questao"]);
        }

        $msg = " " . $placar + 10;
        $resposta = "  " . $resposta;

        if($questao1 == 1 ){
            $msg = "Parabéns, Você Ganhou 10 Pontos!!";
    
        } else if(
            $questao1 == 0){
            $msg = "Que Pena, Você Errou :(";
        }

        #PLACAR
        if (isset($_POST["placar"])){
            $placar = $_POST["placar"] + 10;
        } else {
        }
        
    }

    function exibirQuestao($ordem){
        global $questao;
        global $msg;
    
?>

<h2><p><label><?php echo $questao[$ordem]['perguntas']?></label></p></h2>

    <div class="box">
        <img class="capa" src="sertanejo.jpg" alt="">
        <audio class="audio" src="Nao Sei o Que La_MariliaMendonca_Maiara_Maraisa_.mp3" controls></audio></p>
    </div>

    <h3><input type="radio" name="questao" value="1"/><?php echo $questao[$ordem][0][0]; ?>  <br/>
    <input type="radio" name="questao" value="0"/><?php echo $questao[$ordem][1][0]; ?> <br/>
    <input type="radio" name="questao" value="0"/><?php echo $questao[$ordem][2][0]; ?> <br/>
    <input type="radio" name="questao" value="0"/><?php echo $questao[$ordem][3][0]; ?> <br/></p></h3>

<h3 class = "mensagem"><?php echo $msg?></h3></td>

   <input type="submit" name="continuar" value="Continuar" class="btn btn-primary ">

   <?php
    }

    function exibirPlacar($placar){
        global $placar;

?>

<?php
     }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Sertanejo</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
    .box{
        height:50%;
        width:70%;
        display: flex;
        align-items: center;
        background: darkgreen;
        border-radius: 1px;
        box-shadow: 0 .5px 1px black;
        overflow: hidden;
        margin:2px;
        outline:none;
    }

    .audio{
        height:70px;
        width:80%;
        display: flex;
        outline:none;
    }
    .capa{
        height:30%;
        width:15%;
    }
    .musica{
        font-family:Arial, Helvetica, sans-serif;
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
<body class="musica">
    <form method = "POST" action="Sertanejo.php">
    
    <input type="text" name="ordemq" value="<?php echo $ordemq ?>"/>
            <?php exibirQuestao( $ordemq) ?>

            <input type="text" name="placar" value="<?php echo $placar ?>"/>
            <?php exibirPlacar($placar)?>
        
    </form>
</body>
</html>