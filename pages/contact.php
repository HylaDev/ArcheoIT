<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcheoIT - Contact / Inscription</title>
    <!--Bootstrap 5 link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mes feuilles de style-->
    <link rel="stylesheet" href="/ArcheoIT/styles/index.css">
</head>
<body>
    
    <!-- Nav section-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/ArcheoIT/index.php"><img src="/ArcheoIT/images/logo.png" width="150px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/ArcheoIT/index.php">accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">qui sommes-nous?</a>
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
                    <a class="nav-link actif" href="sites.php">sites</a>
                </li>
               
            </ul>
            <span class="navbar-text mr-auto">
                <a href="contact.php" class="btn btn-primary">contact</a>
                <a href="contact.php" class="btn btn-secondary">inscription</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End Nav section-->

    <!-- Breadcrumbs section--> <br><br>
    <section class='breads mt-5'>
        <div class="container">
            <div class="d-flex">
                <a href="/ArcheoIT/index.php" class="">accueil</a> <span class="mx-2">/</span> <p class="actif">contactez-nous</p>
            </div>
            <hr>
        </div>
    </section>
    <!-- End Breadcrumbs section-->

    <!-- contact -->
    <section class="contact p-4">
        <div class="container">
            <h2 class="my-3 text-center">
                contactez-<span class="">nous</span>
            </h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="/ArcheoIT/images/mail.svg" alt="">
                </div>
                <div class="col-md-6">
                    <p>Remplissez le formulaire suivant pour nous contacter</p>
                    <form method="post" action="/ArcheoIT/contactCrud/insert_contact.php">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                                </div>
                                <div class="col">
                                <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="objet" class="form-control my-3" id=""  placeholder="Entrez votre objet">
                            <input type="email" name="email" class="form-control my-3" id=""  placeholder="Entrez votre email">
                            <textarea name="body" class="form-control" placeholder="Votre message" id="" cols="20" rows="10"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary w-100 my-3"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact -->

    <!-- inscription -->
    <section class="inscription p-4" id="inscription">
        <div class="container">
            
            <div class="row inscription-bg">
                <div class="col-lg-6 col-md-12 my-bg-primary text-white">
                    <div class="container inscription-text text-justify">
                        <h3>
                            Nos différents stages pour enfants et adultes
                        </h3>
                        <p>
                            Plongez dans l'aventure passionnante de l'archéologie avec nos programme de stages conçu 
                            pour les enfants et les adultes !
                        </p>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-md-12 p-3 formulaire">
                    <h2>inscription à un <span>stage</span></h2>
                    <form method="post" action="/ArcheoIT/inscriptionCrud/insert_inscription.php">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="lastname" class="form-control" placeholder="Votre nom">
                                </div>
                                <div class="col">
                                <input type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="u_email" class="form-control my-3" id=""  placeholder="Entrez votre email">
                            <input type="date" name="date_naissance" class="form-control my-3" id=""  placeholder="Entrez votre objet">
                            <select name="stage" class="form-control my-3" id="">
                                <option>Sélectionnez</options>
                                <option value="stage 1">stage 1</options>
                                <option value="stage 2">stage 2</options>
                            </select>
                            <textarea name="commentaires" class="form-control" placeholder="Votre message" id="" cols="20" rows="5"></textarea>
                        </div>
                        <input type="submit" value="Soumettre" class="btn btn-primary w-100 my-3"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End revues -->


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