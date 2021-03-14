<?php 

$content_json = file_get_contents("https://gateway.marvel.com/v1/public/characters/1010354?ts=1&apikey=6846979f3da11106792b6c223296acb6&hash=9295fd3b10a4c753da3a83fd7a700595");
$adamwarlock = json_decode($content_json); //esse é o decode encarregado de transformar o json em um array, no personagem Adam Warlock

$content2_json = file_get_contents("https://gateway.marvel.com/v1/public/characters/1009150?ts=1&apikey=6846979f3da11106792b6c223296acb6&hash=9295fd3b10a4c753da3a83fd7a700595");
$agentzero = json_decode($content2_json);//esse é o decode encarregado de transformar o json em um array, no personagem Agent Zero

foreach ($agentzero->data->results as $characterzero){
    //echo "Personagem: " . $characterzero->name . "<br>"; laço responsável por buscar as informações no array       
}

foreach ($adamwarlock->data->results as $characteradam){
        //echo "Personagem: " . $character->name . "<br>"; laço responsável por buscar as informações no array         
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Marvel API</title>
</head>
    <body>
    <header class="cabecalho">
        <h1>
        <a href="https://gonzalorodriguez.tech"><img src="images/logo-marvel-II.png" alt="some text" width=260 height=80> </a>
        </h1>                
    </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo vermelho-escuro">
                        <h3><? echo $characteradam->name ; ?></h3>
                            <ul>
                                <a href="https://gonzalorodriguez.tech/adam-warlock.php"><img src="https://i.annihil.us/u/prod/marvel/i/mg/a/f0/5202887448860/portrait_uncanny.jpg"> </a>
                            </ul>
                    </div>
                    <div class="modulo vermelho-escuro">
                        <h3><? echo $characterzero->name ; ?></h3>
                            <ul>
                                <a href="https://www.gonzalorodriguez.tech/agent-zero.php"><img src="https://i.annihil.us/u/prod/marvel/i/mg/f/60/4c0042121d790/portrait_uncanny.jpg"> </a>
                            </ul>
                    </div>    
                </nav>
            </div>
        </main> 
    <footer class="rodape">
        Desenvolvido por Gonzalo Muñoz 
    </footer> 
    </body>
</html>