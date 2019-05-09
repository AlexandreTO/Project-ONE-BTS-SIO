<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
    <link href="Bootstrap/css/mdb.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/mdb.min.js"></script>
    <script src="main.js"></script>
    <!-- DANS CET ORDRE -->
</head>

<body class="connect">
    <nav><?php include("entete.php"); ?></nav>
    <!-- Formulaires de contact -->

    <main class="text-center">

        <div class="view2 intro2">

            <h2>Connexion</h2>
            <form action="" class="login" method="post">
                <input type="text" name="Identifiant" id="identifiant" placeholder="Identifiant"><br><br>

                <input type="password" name="password" id="password" placeholder="mot de passe"><br><br>

                <input type="submit" id="connexion" value="Connexion"><br><br>
            </form>
        </div>
    </main>
</body>

</html>