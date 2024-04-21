<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcheoIT - Accueil</title>
    <!--Bootstrap 5 link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mes feuilles de style-->
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    
    <!-- Nav section-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="150px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link actif" aria-current="page" href="index.php">accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apropos.php">qui sommes-nous?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        nos activités
                    </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="stages.php">stages</a></li>
                    <li><a class="dropdown-item" href="conferences.php">conférences</a></li>
                    <li><a class="dropdown-item" href="revues.php">revues</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sites.php">sites</a>
                </li>
            </ul>
            <span class="navbar-text mr-auto">
                <a href="contact.php" class="btn btn-primary">contactez-nous</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End Nav section-->

    <!-- Banner section-->
    <section class='banner'>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>
                        L'archéologie au coeur de nos projets
                    </h1>
                    <p>
                        archeoIT fouille un peu partout en France et à l'internationnale
                    </p>
                    <a href="sites.php" class="btn btn-primary ">voir nos sites</a>
                </div>
                <div class="col-md-6">
                    <img src="images/image.svg" class="img-fluid my-3" alt="Archeo object">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner section-->

    <!-- About us section-->
    <section class='about-us my-bg-primary p-5'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 my-4">
                    <div class="titre">
                        <h2 class="text-white">
                            ArcheoIT
                        </h2>
                    </div>
                    <p>
                        Notre équipe est composée de jeunes archéologues passionnés et énergiques. En collaboration avec des experts de l'<a class="text-gray" href="https://www.inrap.fr/" target="blank">Inrap</a>, nous entreprenons des fouilles à travers le monde, 
                        explorant divers sites archéologiques avec enthousiasme et engagement.
                    </p>
                    <p>
                        Notre objetif est de comprendre notre passé et de préserver notre patrimoine culturel.
                    </p>
                    <a href="apropos.php" class="btn btn-secondary">En savoir +</a>
                </div>
                <div class="col-md-6">
                    <img src="images/about.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About us section-->

    <!-- Activités section-->
        <section class="activites">
            <div class="container">
                <h2 class="my-4">
                    nos <span class="">activités</span>
                </h2>
                <div class="row">
                    <div class="col-md-4 my-1">
                        <a href="contact.php#inscription">
                            <div class="card">
                                <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                                <div class="card-body">
                                    <h5 class="card-title">Stages</h5>
                                    <p class="card-text">
                                        Plongez dans l'aventure passionnante de l'archéologie avec notre programme de stages conçu 
                                        pour les enfants et les adultes ! Rejoignez-nous pour une expérience 
                                        immersive où vous découvrirez les mystères cachés du passé tout en apprenant les techniques de fouille.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="revues.php">
                            <div class="card">
                                <img src="images/book.jpeg" class="card-img-top" alt="Archeo Book">
                                <div class="card-body">
                                    <h5 class="card-title">Revues</h5>
                                    <p class="card-text">
                                        Découvrez notre collection captivante de revues téléchargeables en archéologie, 
                                        conçues pour tous les passionnés, que vous soyez enfants ou adultes.
                                        Nos revues offrent un contenu riche, illustré de photographies saisissantes et de diagrammes explicatifs
                                        pour vous faire voyager à travers l'histoire humaine.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 my-1">
                        <a href="conferences.php">
                            <div class="card">
                                <img src="images/meeting_1.jpeg" class="card-img-top" alt="Archeo meeting">
                                <div class="card-body">
                                    <h5 class="card-title">Conférences</h5>
                                    <p class="card-text">
                                        Venez découvrir le passionnant monde de l'archéologie à travers nos conférences captivantes, 
                                        adaptées à tous les âges ! Que vous soyez un enfant curieux ou un adulte avide de connaissances.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <!-- End activités section-->

    <!-- Actus section-->
    <section class="actualites my-bg-primary p-5">
        <div class="container-fluid">
            <h2 class="text-center">
                notre <span>actualités</span>
            </h2>
            <div class="row">
            <div class="col-md-4 my-2">
                    <div class="card">
                        <div class="actu-image">
                            <p>découvertes</p>
                            <img src="images/moulin.jpg" class="card-img-top" alt="Archeo search">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Archéologie d'un moulin à vent à Sartrouville (Yvelines) </h5>
                            <p class="card-text">
                                Une équipe de l'Inrap fouille les fondations d'un moulin à vent et de la maison d'un meunier, un vestige rare d’une 
                                machine ayant pourtant joué un rôle prépondérant dans l’économie médiévale et moderne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card">
                        <div class="actu-image">
                            <p>évènements</p>
                            <img src="images/musee.jpg" class="card-img-top" alt="Archeo search">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">La somme des pré-histoires au musée Picardie</h5>
                            <p class="card-text">
                                Labellisée « exposition d'intérêt national » par le ministère de la Culture, « La Somme des Préhistoires » met en lumière l'archéologie d'un territoire 
                                qui a été le berceau des études préhistoriques mondiales. </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 my-2">
                    <div class="card">
                        <div class="actu-image">
                            <p>découvertes</p>
                            <img src="images/marche.jpg" class="card-img-top" alt="Archeo search">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fouille de la place du Marché couvert au Puy-en-Velay (Haute-Loire) </h5>
                            <p class="card-text">
                            À l’occasion de travaux d’installation de conteneurs enterrés, l’Inrap a conduit une fouille sur la place du Marché couvert dans le centre ancien du Puy-en-Velay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Actus section-->

    <!--Call to action -->
    <section class="cta p-5">
        <div class="container-fluid">
           <div class="row">
                <div class="col-md-8">
                    <p> Envie de participer à nos stages pour enfants et adultes ?
                        N'attendez plus rien inscrivez-vous dès maintenant à une section de stage.
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="contact.php#inscription" class="btn btn-primary">inscription <i class="fa fa-arrow-right"></i></a>
                </div>
           </div>
        </div>
    </section>
    <!--End Call to action -->


    <!-- Footer section-->
    <section class="footer">
        <div class="">
            <div className="d-flex flex-row align-items-center justify-content-center">
                <span className='icon'><a href='https://www.linkedin.com/in/y%C3%A9lian-ernest-dossa/' target='blank'><i class="fa fa-linkedin"></i></a></span>
                <span className='icon mx-3'><a href='https://github.com/HylaDev' target='blank'><i class=" mx-3 fa fa-github"></i></a></span>
            </div>
            <p> Made with <span className='heart'>♡</span> by me</p>
            
        </div>
    </section>
    <!-- End Footer section-->

    <!--Bootstrap 5 script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/c2cd48c276.js" crossorigin="anonymous"></script>
</body>
</html>