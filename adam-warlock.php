<?php

    $content_json = file_get_contents("https://gateway.marvel.com/v1/public/characters/1010354/stories?ts=1&apikey=6846979f3da11106792b6c223296acb6&hash=9295fd3b10a4c753da3a83fd7a700595");
    $content = json_decode($content_json);

    //print_r($content); PARA DEBUGAR O ARRAY

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
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho-escuro">
                    <h3>Stories</h3>
                    <?php    
                        foreach ($content->data->results as $character){
                        echo "Story: " . $character->title . "<br>";
                        echo "<hr>";  
                        }
                    ?>
                 </div>
            </nav>
        </div> 
    </body>
    <footer class="rodape">
        Desenvolvido por Gonzalo Muñoz 
    </footer>
</html>