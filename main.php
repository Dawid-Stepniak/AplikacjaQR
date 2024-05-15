<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator kodów QR</title>
</head>
<body>
    <h1>Wygeneruj swój kod QR</h1>
    <br>
    <form>
        <label for="posX">Pozycja X</label>
        <input type="number" name="posX">
        <br><br>
        <label for="posY">Pozycja Y</label>
        <input type="number" name="posX">
        <br><br>
        <label for="imgSelect">Wybierz tło</label>
        <input type="file" name="imgSelect" accept=".png,.jpg,.jpeg">
        <br><br>
        <label for="csvSelect">Wybierz plik csv</label>
        <input type="file" name="csvSelect" accept=".csv">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
