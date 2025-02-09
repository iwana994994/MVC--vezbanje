<main>
        <h2>Glavni sadržaj</h2>
        <form action="controler/form-controler.php" method="POST">
    <label for="name">Ime:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">Poruka:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    
    <!-- Dugme za slanje forme -->
    <button type="submit">Pošaljite</button>
</form>
    </main>