<?php
echo "<h1>Você pode gostar de...</h1>";

if(isset($_POST['botao'])){
    $artistas = [["Fito Paez","Michael Jackson","Janis Joplin", "Madonna"],["Raul Seixas","Jão","Rita Lee","Iza"]];
    if($_POST['origem']=="in"){
        $origem = 0;
    }else{
        $origem = 1;
    }
    if($_POST['artista']=="ca"){
        $filtro[] = $artistas[$origem][2];
        $filtro[] = $artistas[$origem][3];
    }else{
        $filtro[] = $artistas[$origem][0];
        $filtro[] = $artistas[$origem][1];
    }
    if(isset($_POST["pop"]) && isset($_POST["rock"])){
        echo $filtro[0];
        echo "<br>";
        echo $filtro[1];
    }else if(isset($_POST["rock"])){
        echo $filtro[0];
    }else if(isset($_POST["pop"])){
        echo $filtro[1];
    }else{
        echo $filtro[0];
        echo "<br>";
        echo $filtro[1];
    }
}else{
    header("location:index.php");
}