<?php 
session_start(); // Start the session at the beginning of your file 
?>
<!DOCTYPE html>
<html lang="IT">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FormulaForFun</title>
        <link rel="stylesheet" href="Style_Pilota.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">  
    </head>

    
<body>
<div class="header">
        <div class="logo">
            <a href="../index.php" class="box-link"><img src="media/logo.png" alt=""></a>
        </div>

        <ul class="menu">
            <?php if(isset($_SESSION['username'])): ?>
                <li><a href="../pagina_personale.php" id="userImage"><img src="<?php echo $_SESSION['profile_image']; ?>" alt="image"></a></li>
                <label><a href="../logout.php" id="logoutButton" class="menu-text">LOGOUT</a></label>
            <?php else: ?>
                <label><a href="../loginStart.php" id="loginButton" class="menu-text">LOGIN</a></label>
                <label><a href="../register.html" id="registerButton" class="menu-text">REGISTER</a></label>
            <?php endif; ?>
            <li><a href="../API/statisticheApi.php" class="menu-text">Stats</a></li>
            <li><a href="../piloti.php" class="menu-text">Piloti</a>
                <ul>
                    <li><a href="verstappen.php">Max Verstappen</a></li> 
                    <li><a href="perez.php">Sergio Perez</a></li> 
                    <li><a href="Hamilton.php">Lewis Hamilton</a></li> 
                    <li><a href="Russel.php">George Russell</a></li> 
                    <li><a href="Leclerc.php">Charles Leclerc</a></li>
                    <li><a href="sainz.php">Carlos Sainz</a></li> 
                    <li><a href="Norris.php">Lando Norris</a></li>
                    <li><a href="piastri.php">Oscar Piastri</a></li>
                    <li><a href="Alonso.php">Fernando Alonso</a></li>
                    <li><a href="Stroll.php">Lance Stroll</a></li>                     
                    <li><a href="Gasly.php">Pierre Gasly</a></li>
                    <li><a href="Ocon.php">Esteban Ocon</a></li>
                    <li><a href="Albon.php">Alexander Albon</a></li>
                    <li><a href="Sargeant.php">Logan Sargeant</a></li>
                    <li><a href="Tsunoda.php">Yuki Tsunoda</a></li>
                    <li><a href="Ricciardo.php">Daniel Ricciardo</a></li>
                    <li><a href="bottas.php">Valterri Bottas</a></li>
                    <li><a href="Zhou.php">Ghuanyu Zhou</a></li>
                    <li><a href="Hulkenberg.php">Nico Hulkenberg</a></li>
                    <li><a href="magnussen.php">Kevin Magnussen</a></li>
                </ul>
            </li>
            <li><a href="../scuderie.php" class="menu-text">Scuderie</a>
                <ul>
                    <span><a href="../scuderie/RedBull.php" >Red Bull</a></span>
                    <span><a href="../scuderie/Mercedes.php" >Mercedes</a></span>
                    <span><a href="../scuderie/Ferrari.php" >Ferrari</a></span>
                    <span><a href="../scuderie/McLaren.php" >McLaren</a></span>
                    <span><a href="../scuderie/AstonMartin.php" >Aston Martin</a></span>
                    <span><a href="../scuderie/Alpine.php" >Alpine</a></span>
                    <span><a href="../scuderie/Williams.php" >Williams</a></span>                       
                    <span><a href="../scuderie/AlphaTauri.php" >Alpha Tauri</a></span>
                    <span><a href="../scuderie/KickSaubern.php" >Kick Saubern</a></span>
                    <span><a href="../scuderie/Haas.php" >Haas</a></span>
                </ul>
            </li>
            <li><a href="../fanta-formula.php" class="menu-text">Fanta-Formula</a></li> 
            </ul>

        <div class="r-l">
        <?php if(isset($_SESSION['username'])): ?>
                    <a href="../pagina_personale.php" id="userImage"><img src="<?php echo $_SESSION['profile_image']; ?>" alt="image"></a>
                    <a href="../logout.php" id="logoutButton" class="button">LOGOUT</a>
                <?php else: ?>
                    <a href="../loginStart.php" id="loginButton" class="button">LOGIN</a>
                    <p>
                    <a href="../register.html" id="registerButton" class="button">REGISTER</a>
                <?php endif; ?>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="hero">
        <div class="hero__content ">
            <h1 class = "big-text">ALEXANDER ALBON </h1>
        </div>
        <video autoplay muted loop id="video">
            <source src="media/albon_video.mp4" type="video/mp4">

        </video>
    </div>
    <div class="mt-2 scroll">
        <main>
            <ul class="slider">
            <li class="item" style="background-image: url('media/Carriere_williams.jpg')";>
                <div class="content">
                <h2 class="title" style="font-size: 60px;">"Carriera"</h2>
                <p class="description">
                    Dopo aver dimostrato il suo valore nel karting, Albon è entrato a far parte 
                    del programma giovani della Red Bull. Successivamente è entrato nel progetto 
                    Lotus Junior, dove ha continuato a farsi notare.
                    <br>
                    Il suo percorso nelle monoposto è proseguito con successo, passando attraverso 
                    categorie come l'Eurocup Formula Renault 2.0, la Formula 3 Europea e la GP3 Series. 
                    Nel 2018 è passato alla Formula 2 con la squadra DAMS, ottenendo quattro vittorie 
                    e terminando terzo in campionato.
                    <br>
                    Nel 2019, Albon ha fatto il suo debutto in Formula 1 con la Scuderia Toro Rosso, 
                    prima di essere promosso alla Red Bull Racing durante la stessa stagione. Sebbene 
                    abbia conseguito alcuni risultati positivi, la sua permanenza in Red Bull è stata 
                    oscurata dall'ombra del compagno di squadra Max Verstappen. Nel 2021, Albon ha 
                    partecipato al DTM prima di essere confermato come pilota ufficiale per la Williams 
                    nella stagione 2022 di Formula 1.
                </p>
                </div>
            </li>
            <li
                class="item"
                style="background-image: url('media/stats_albon.jpg')"
            >
                <div class="content">
                <h2 class="title" style="font-size: 60px;">"Statistiche"</h2>
                <p class="description">
                    Albon non ha avuto molta fortuna, nonostante una lunga carriera a soli 28 anni.
                    Ha ottenuto due podi e soli 2.4 punti per gara nella sua carriera, ma sfortunatamente 
                    anche se ha avuto costruttori forti tipo RedBull, è sempre stato svalutato per 
                    i suoi compagni, tipo Verstappen. 
                </p>
                <a href="../stats.php"><button>Read More</button></a>
                </div>
            </li>
            <li class="item" style="background-image: url('media/biografia_albon.jpg');">
                <div class="content">
                <h2 class="title" style="font-size: 60px;">"Biografia"</h2>
                <p class="description">
                    Alexander Albon è nato a Londra il 23 marzo 1996 da madre thailandese e padre inglese. 
                    Dotato di doppia nazionalità, Albon ha scelto di gareggiare con licenza thailandese, 
                    utilizzando il numero 23 come omaggio alla sua passione per il pilota italiano Valentino 
                    Rossi, sebbene avrebbe preferito utilizzare il numero 46, ma non gli è stato possibile a 
                    causa di problemi licenziatari.
                    <br>
                    Fin dai suoi primi passi nel motorsport nel 2006 nel campionato Super 1 National Honda, 
                    Albon ha dimostrato un talento eccezionale nel karting, conquistando successi record. 
                    Nel corso degli anni ha ottenuto vittorie significative, tra cui il campionato europeo 
                    e mondiale nella classe KF3.
                </p>
            </li>

            <li class="item" style=" background-image: url('media/team_williwams.webp');">
                <div class="content">
                <h2 class="title" style="font-size: 60px; text-align: center;">"Compagno"</h2>
                <a href="Sargeant.php"><button>Read More</button></a>
                </div>
            </li>
            <li class="item" style=" background-image: url('media/williams_pitstop.jpg');">
                <div class="content">
                <h2 class="title"style="font-size: 60px;">"Scuderia"</h2>
                <a href="../Williams.php"><button>Read More</button></a>
                </div>
            </li>
            </ul>
            <nav class="nav">
            <ion-icon class="btn prev" name="arrow-back-outline"></ion-icon>
            <ion-icon class="btn next" name="arrow-forward-outline"></ion-icon>
            </nav>
        </main>
    </div>

    
    <div class="hero-telefono" style=" background-image: url('media/albon_phone.jpg');">
        <div class="hero-telefono__content">
            <h1 class = "medium-text"> ALEXANDER ALBON</h1>
        </div>
    </div>
  
    <div class="telefono">
        <h2 class="title">Biografia</h2>
        <p class="description">
            Alexander Albon è nato a Londra il 23 marzo 1996 da madre thailandese e padre inglese. 
            Dotato di doppia nazionalità, Albon ha scelto di gareggiare con licenza thailandese, 
            utilizzando il numero 23 come omaggio alla sua passione per il pilota italiano Valentino 
            Rossi, sebbene avrebbe preferito utilizzare il numero 46, ma non gli è stato possibile a 
            causa di problemi licenziatari.
            <br>
            Fin dai suoi primi passi nel motorsport nel 2006 nel campionato Super 1 National Honda, 
            Albon ha dimostrato un talento eccezionale nel karting, conquistando successi record. 
            Nel corso degli anni ha ottenuto vittorie significative, tra cui il campionato europeo 
            e mondiale nella classe KF3.
        </p>
        <h2 class="title">Carriera</h2>
        <p class="description">
            Dopo aver dimostrato il suo valore nel karting, Albon è entrato a far parte 
            del programma giovani della Red Bull. Successivamente è entrato nel progetto 
            Lotus Junior, dove ha continuato a farsi notare.
            <br>
            Il suo percorso nelle monoposto è proseguito con successo, passando attraverso 
            categorie come l'Eurocup Formula Renault 2.0, la Formula 3 Europea e la GP3 Series. 
            Nel 2018 è passato alla Formula 2 con la squadra DAMS, ottenendo quattro vittorie 
            e terminando terzo in campionato.
            <br>
            Nel 2019, Albon ha fatto il suo debutto in Formula 1 con la Scuderia Toro Rosso, 
            prima di essere promosso alla Red Bull Racing durante la stessa stagione. Sebbene 
            abbia conseguito alcuni risultati positivi, la sua permanenza in Red Bull è stata 
            oscurata dall'ombra del compagno di squadra Max Verstappen. Nel 2021, Albon ha 
            partecipato al DTM prima di essere confermato come pilota ufficiale per la Williams 
            nella stagione 2022 di Formula 1.
        </p>
        <h2 class="title">Statistiche</h2>
        <p class="description">
            Albon non ha avuto molta fortuna, nonostante una lunga carriera a soli 28 anni.
            Ha ottenuto due podi e soli 2.4 punti per gara nella sua carriera, ma sfortunatamente 
            anche se ha avuto costruttori forti tipo RedBull, è sempre stato svalutato per 
            i suoi compagni, tipo Verstappen. 
        </p>

        
    </div>
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="verstappen.js"></script>
    <script src="hamburger.js"></script>

    <footer class="footer">        
        <div class="col">
            <h3 class="medium-text">Contatti </h3>
            <p class="normal-text">e-mail: <br/> Fantaformula@gmail.com</p>
            <p class="normal-text">telefono: <br/> +39 3383477124</p>
        </div>
    </footer>
    
    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="hamburger.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>


