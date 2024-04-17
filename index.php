<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\case-study.png" type="image/x-icon">
    <title>Switch Case</title>
</head>
<body>

<h1>Escolha uma filme: </h1>

<form action="#" method="post">
    <select name="filme" id="#">
        <option value="coraline">Coraline e o Mundo Secreto</option>
        <option value="jurassic">Jurassic World</option>
        <option value="clube">Clube da Luta</option>
        <option value="asbranquelas">As Branquelas</option>
        <option value="interestelar">Interestelar</option>
    </select>
    <input class="botao" type="submit" value="Ver detalhes">
</form>

<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    switch ($_POST["filme"]){
        case "coraline":
            $titulo = "Coraline e o Mundo Secreto";
            $sinopse = "Enquanto explora sua nova casa à noite, a pequena Coraline descobre uma porta secreta que contém um mundo parecido com o dela, porém melhor em muitas maneiras. Todos têm botões no lugar dos olhos, os pais são carinhosos e os sonhos de Coraline viram realidade por lá. Ela se encanta com essa descoberta, mas logo percebe que segredos estranhos estão em ação: uma outra mãe e o resto de sua família tentam mantê-la eternamente nesse mundo paralelo."; 
            $imagem = "https://br.web.img2.acsta.net/medias/nmedia/18/87/79/16/19961587.jpg";
            break;

        case "jurassic":
                $titulo = "Jurassic World"; 
                $sinopse = "O Parque dos Dinossauros está aberto para visitação, e o público tem a chance de ver de perto as mais diversas espécies. No entanto, um desses animais, resultado de experiência genética, desenvolve alta inteligência e se torna uma ameaça para todos.";   
                $imagem = "https://upload.wikimedia.org/wikipedia/pt/4/4d/Jurassic_World_2015.jpg";
                break;

        case "clube":
                $titulo = "Clube da Luta"; 
                $sinopse = "Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído. A dupla forma um clube com regras rígidas onde homens lutam. A parceria perfeita é comprometida quando uma mulher, Marla, atrai a atenção de Tyler.";           
                $imagem = "https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/90/95/96/20122166.jpg";   
                
        case "asbranquelas":
                $titulo = "As Branquelas"; 
                $sinopse = "Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos em uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons. Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus e Kevin, dois homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.";   
                $imagem = "https://upload.wikimedia.org/wikipedia/pt/thumb/d/de/White_chicks.jpeg/230px-White_chicks.jpeg";
                break;
                
        case "interestelar":
                $titulo = "Interestelar"; 
                $sinopse = "As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.";   
                $imagem = "https://upload.wikimedia.org/wikipedia/pt/thumb/3/3a/Interstellar_Filme.png/250px-Interstellar_Filme.png";
                break;  
                
                default:
                $titulo = "";
                $sinopse = "";
                $imagem = "";
    }

    if($titulo && $sinopse && $imagem){
        echo"<h2>$titulo</h2>";
        echo"<p>$sinopse</p>";
        echo"<img src='$imagem' alt='$titulo'></img>";
    }else{
        echo "<p>Informe um filme válido e tente novamente.</p>";
    }
}

?>
    

    <footer><p>Desenvolvido por Gabriela Padilha &copy;</p></footer>

    <script src="https://cdn.userway.org/widget.js" data-account="kCDHqw9ltL"></script>

<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

</body>
</html>