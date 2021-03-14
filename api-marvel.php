<?php 
$content_json = file_get_contents("https://gateway.marvel.com/v1/public/characters/1009150?ts=1&apikey=6846979f3da11106792b6c223296acb6&hash=9295fd3b10a4c753da3a83fd7a700595");
$content = json_decode($content_json);
?>
        <pre>
        <?php //print_r($content);
        foreach ($content->data->results as $sobre){
            echo "About: " . $sobre->description . "<br>";        
        
        }
        ?>
        </pre>



