<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Reservia</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="icon" type="image/x-icon" href="images/logo/Reservia.ico"/>
        <script src="https://kit.fontawesome.com/38914195b2.js" crossorigin="anonymous"></script>
    </head>

    <body id="index">
    <header>
        <div id="head">
            <div>
                <img src = "images/logo/Reservia.png"/>
            </div>
            <nav>
                <div id = "scherch">
                    <a href="#heberg" class="navlink">Hébergement</a>
                    <a href="#activity" class="navlink">Activités</a>
                    <a href="#signin" class="navlink" id ="signup">S'inscrire</a>
                </div>
            </nav>
        </div>
    </header>

    <main id="main">
        <div>
            <h1>Trouvez votre hébergement pour des vacances de rêve</h1>
            <p>En plein centre ville ou en pleine nature</p>
        </div>
        <form method="GET" action="index.php">
            <i class="fas fa-map-marked-alt"></i>
            <input type="search" name="search" placeholder="Paris, France" size="15">
            <button type="submit">Rechercher</button>
        </form>
        <div>
            <h2>Filtre</h2>
            <div>
            <span>Économique</span>
            </div>
            <div>
            <span>Familial</span>
            </div>
            <div>
            <span>Romantique</span>
            </div>
            <div>
            <span>Animaux auorisés</span>
            </div>
        </div>
        <div>
        <i class="fas fa-info"></i>
        <span>
        Plus de 500 logements sont disponibles dans cette ville
        </span>
        </div>
        <?php
        if(isset($_GET['search']) == 'paris'){
            echo '<p>paris</p>';
        }else if(isset($_GET['search']) == 'saara'){
            echo '<p>saara</p>';
        }else if(isset($_GET['search']) == 'saoul'){
            echo '<p>saoul</p>';
        }
        ?>

    </main>

    <footer>
    <footer>

    </body>
</html>