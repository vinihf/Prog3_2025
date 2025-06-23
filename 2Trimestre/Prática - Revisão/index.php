<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendação musical</title>
</head>
<body>
    <form action='recomenda.php' method='post'>
        <h1>Gosto Musical</h1>
        <p>Eu gosto de:</p>
        <div class='grupo'>
            <label>
                <input type='radio' name='origem' value='nac' required>
                Música nacional
            </label>
            <label>
                <input type='radio' name='origem' value='in' required>
                Música internacional
            </label>
        </div>
        <p>Eu prefiro:</p>
        <div class='grupo'>
            <label>
                <input type='radio' name='artista' value='ca' required>
                Cantora
            </label>
            <label>
                <input type='radio' name='artista' value='co' required>
                Cantor
            </label>
        </div>
        <p>Estilos que eu prefiro:</p>
        <div class='grupo'>
            <label>
                <input type='checkbox' name='pop' value='pop'>
                Pop
            </label>
            <label>
                <input type='checkbox' name='rock' value='rock'>
                Rock
            </label>
        </div>
        <input type='submit' value='Recomendar' name='botao'>
    </form>
</body>
</html>