<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Se connecter</title>
                   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>Carousel Template · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
        <link rel="stylesheet" href="assets/zoombox.css" />

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
            <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Rapahël AMAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="cv.php" tabindex="-1">Curriculum vitae</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="PPE.php" tabindex="-1">PPE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="stage.php" tabindex="-1">Stage</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login1.php" tabindex="-1">se connecter</a>
                    </li>

                </ul>

            </div>
        </nav>

  </header>
        <link href="style.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <img src="img/vid.png" width="15" height="15"class="card-img-top" alt="...">
    <img src="img/vid.png" width="15" height="15"class="card-img-top" alt="...">
    <body>
       <div class="contener">
    <div class="row">
    <div class="col-12">
        <center><h1 style="flex: 1;font-size: 24px;padding: 0;margin: 0;color: #eaebed;font-weight: normal;">FilElec Store</h1></center>
         <center> <h2 style=".content\ h2\ {\ margin: 0;padding: 25px 0;font-size: 22px;border-bottom: 1px solid #e0e0e3;color: #e0e0e3;"> Accueil </h2>
             <p style="box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);margin: 25px 0;padding: 25px;background-color: #e0e0e3;"> Bienvenue ! Connectez vous !</p> </center>
        <div class="login">
            <center> <h1>Se connecter</h1> </center>
            <center>
            <form action="authenticate.php" method="post">
                <label for="pseudo">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="mdp" placeholder="mdp" id="mdp" required>
                <input type="submit" value="Login">
            <img src="img/vid2.png" width="15" height="15" class="card-img-top" alt="...">
            <a href="index.php"> <img src="img/retour.png"class="btn btn-primary"   align="center" role="button" width="2.5%" > </a>
                </form>
            </center>
                 
        </div></div></div></div>

    </body>
    <footer style="position: absolute;bottom: 0;color:#eaebed; border-top: 1px solid #e0e0e3;padding: 20px 0;width: 100%;">
        <div class="content-wrapper">
            <p>© 2020, NaYaSaEl</p>
        </div>
    </footer>
</html>