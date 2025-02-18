
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin-nav.css">
</head>
<body id="body-nav">
    <div class="admin-container">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                
                <li><a  href="admin-nav.php?page=proizvod">Proizvodi</a></li>
                <li><a  href="admin-nav.php?page=poruka">Poruke</a></li>
                <li><a  href="admin-nav.php?page=korisnik">Korisnici</a></li>
                <li><a  href="admin-nav.php?page=odjava">Odjava</a></li>
            </ul>
        </aside>
    <!-- Glavni sadržaj -->
    <main class="content">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
               if ($page == "poruka") {
                include "./template/poruka.php";}
                elseif ($page == "proizvod") {
                    include "./template/proizvod.php";
                } elseif ($page == "dodaj-proizvod") {
                    include "./template/dodajProizvod.php";
                } else {
                    echo "<h1>Dobrodošli u Admin Panel</h1>";
                    
                }
            ?>
        </main>