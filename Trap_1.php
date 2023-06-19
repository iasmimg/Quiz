
<?php
    $resposta = 1;
    $placar = 0;
    $msg = '';
    $ordemq = 0;
    $placar = 0;
    $musi=array("musica01.mp3","02LuisV.mp3","03PerdoaPorTudoVida.mp3","04CartaoBlack.mp3","05VestidodaFendi.mp3","06AmaOJeitoQueMeOdeia.mp3","07Vampiro.mp3", "08Quervoar.mp3",
    "09ConexoesdeMafia.mp3", "10BercodoTrap.mp3");
    #Q1
    $questao[0]['perguntas'] = "Quem canta essa música?";
    $questao[0][0] = array("MC Cabelinho, Baco Exu do Blues e Delacruz", true);
    $questao[0][1] = array("MC Cabelinho e Belo", false);
    $questao[0][2] = array("KayBlack, Baco Exu do Blues e Nagalli", false);
    $questao[0][3] = array("Veigh e MC Luanna", false);

    #Q2
    $questao[1]['perguntas'] = "Que música é esta?";
    $questao[1][0] = array("Drink", false);
    $questao[1][1] = array("Luis V, Menina Linda", true);
    $questao[1][2] = array("Quadro", false);
    $questao[1][3] = array("Não Me Sinto Mal Mais", false);

    #Q3
    $questao[2]['perguntas'] = "Complete a música “Perdoa Por Tudo Vida”:";
    $questao[2][0] = array("Só pra confirmar, ainda quer que eu deixe uma das minhas jóia", false);
    $questao[2][1] = array("Perdoa por tudo, vida", false);
    $questao[2][2] = array("Quem mandou te conhecer, malvada sem sentimento", false);
    $questao[2][3] = array("Eu preciso ir, ela me diz: Mais tarde cê volta?", true);

    #Q4
    $questao[3]['perguntas'] = "Descubra a música (Cartão Black):";
    $questao[3][0] = array("Flash", false);
    $questao[3][1] = array("Meu Corre", false);
    $questao[3][2] = array("Cartão Black", true);
    $questao[3][3] = array("Probleminha", false);

    #Q5
    $questao[4]['perguntas'] = "Quem canta essa música? (Vestido da Fendi)";
    $questao[4][0] = array("KayBlack", true);
    $questao[4][1] = array("Oruam", false);
    $questao[4][2] = array("WIU", false);
    $questao[4][3] = array("BIN", false);

    #Q6
    $questao[5]['perguntas'] = "Complete a música “Ama o Jeito Que Me Odeia”:";
    $questao[5][0] = array("Acostumado a nunca ser amado", false);
    $questao[5][1] = array("Sempre soube que eu era um labirinto", true);
    $questao[5][2] = array("Confio na sombra que segue meu corpo", false);
    $questao[5][3] = array("Não tô perdido, cê se enganou", false);

    #Q7
    $questao[6]['perguntas'] = "Que música é essa?";
    $questao[6][0] = array("Pandora", false);
    $questao[6][1] = array("M4", false);
    $questao[6][2] = array("Vampiro", true);
    $questao[6][3] = array("Groupies", false);

    #Q8
    $questao[7]['perguntas'] = "Quem canta essa música (Quer Voar)?";
    $questao[7][0] = array("KayBlack", false);
    $questao[7][1] = array("Lezin", false);
    $questao[7][2] = array("Sidoka", false);
    $questao[7][3] = array("Matuê", true);

    #Q9
    $questao[8]['perguntas'] = "Complete a música “Conexões de Máfia”:";
    $questao[8][0] = array("Ninguém nunca vai me atrasar", true);
    $questao[8][1] = array("Coisa ruim vira ferida", false);
    $questao[8][2] = array("Sem espaço pra quem vacilar", false);
    $questao[8][3] = array("São conexões de máfia", false);

    #Q10
    $questao[9]['perguntas'] = "Quem canta essa música (Berço do Trap)?";
    $questao[9][0] = array("Sidoka", false);
    $questao[9][1] = array("Lezin", true);
    $questao[9][2] = array("MC Caveirinha", false);
    $questao[9][3] = array("Oruam", false);

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
        global $musi;
    
?>

<h2><p><label><?php echo $questao[$ordem]['perguntas']?></label></p></h2>

    <div class="box">
        <img class="capa" src="trap.jpg" alt="">
        <audio class="audio" src="<?php echo $musi[$ordem];?>" controls <?php echo $questao[$ordem][0][0];?>]></audio></p>
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
    <title>Trap</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
    .box{
        height:50%;
        width:70%;
        display: flex;
        align-items: center;
        background: darkslateblue;
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
    footer{
       
       position: fixed;
       bottom:0;
       left:0;
       color: white;
       background-color:rgb(7, 7, 7);
       width: 100%;
       text-align: left;
       font-family:Arial, Helvetica, sans-serif;
       padding-top: 10px;
       padding-left: 20px;
       padding-right: 20px;
       padding-bottom: 10px;
       font-size: 13px;
       font-weight: bold;
   
       }
      .footerright{
          float: right;
      }
   
      .footerleft{
       float: left;
   }
</style>
<body class="musica">
    <form method = "POST" action="Trap_1.php">
    
            <input type="text" name="ordemq" value="<?php echo $ordemq ?>"/>
            <?php exibirQuestao( $ordemq) ?>

            <input type="text" name="placar" value="<?php echo $placar ?>"/>
            <?php exibirPlacar($placar)?>
        
    </form>

    
<footer>
 <div class="footerleft">
 Trabalho para disciplina de Programação pra Internet <br>
    Professor: Éberton Marinho <br>
    Unidade 1
 </div>           


<div class="footerright">
 Desenvolvedores <br>
Alexandra Galvão - alexandra.galvao@escolar.ifrn.edu.br <br>
Eliel Ewerton - eliel.ewerton@escolar.ifrn.edu.br <br>
Iasmim Dias - iasmim.dias@escolar.ifrn.edu.br <br>
João Victor Lima - victor.lima@escolar.ifrn.edu.br <br>
Kaliny Gomes - kaliny.g@escolar.ifrn.edu.br
</div>


</footer>

</body>
</html>