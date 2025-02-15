<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Dodaj proizvod</title>
</head>
<body>
    <h1>Dodaj novi proizvod</h1>
    <form method="post" action="../controler/ProizvodController.php">
        <label>Ime proizvoda:</label>
        <input type="text" name="ime" required><br>

        <label>Opis:</label>
        <textarea name="opis" required></textarea><br>

        <label>Cena (RSD):</label>
        <input type="number" name="cena" step="0.01" required><br>

        <label>Zalihe:</label>
        <input type="number" name="zalihe" required><br>

        <label>Slika (ime fajla, npr. "torta.jpg"):</label>
        <input type="text" name="slika" required><br>

        <button type="submit">Dodaj proizvod</button>
    </form>
</body>
</html>
