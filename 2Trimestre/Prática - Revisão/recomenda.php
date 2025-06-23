<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel="stylesheet">
</head>
<body>
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
        echo "<img src='img/{$filtro[0]}.jpg'>";
        echo "<br>";
        echo $filtro[1];
        echo "<br>";
        echo "<img src='img/{$filtro[1]}.jpg'>";
    }else if(isset($_POST["rock"])){
        echo $filtro[0];
        echo "<br>";
        echo "<img src='img/{$filtro[0]}.jpg'>";
    }else if(isset($_POST["pop"])){
        echo $filtro[1];
        echo "<br>";
        echo "<img src='img/{$filtro[1]}.jpg'>";
    }else{
        echo $filtro[0];
        echo "<br>";
        echo "<img src='img/{$filtro[0]}.jpg'>";
        echo "<br>";
        echo $filtro[1];
        echo "<br>";
        echo "<img src='img/{$filtro[1]}.jpg'>";
    }
}else{
    header("location:index.php");
}
?>
</body>
</html>
