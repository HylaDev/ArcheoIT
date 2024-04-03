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
            <a class="navbar-brand" href="#">archeoIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">qui sommes-nous?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        nos activités
                    </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Stages</a></li>
                    <li><a class="dropdown-item" href="#">conférences</a></li>
                    <li><a class="dropdown-item" href="#">revues</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">sites</a>
                </li>
               
            </ul>
            <span class="navbar-text mr-auto">
                <a href="" class="btn btn-primary">contactez-nous</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End Nav section-->

    <!-- Banner section-->
    <section class='banner'>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>
                        L'archéologie au coeur de nos projets
                    </h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, quae? Est, laudantium quia! Necessitatibus, illo. Pariatur asperiores quo sit reprehenderit maiores 
                        
                    </p>
                    <a href="" class="btn btn-primary ">voir nos sites</a>
                </div>
                <div class="col-md-6">
                    <img src="images/image.svg" class="img-fluid" alt="Archeo object">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner section-->

    <!-- About us section-->
    <section class='about-us my-bg-primary p-5'>
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-4">
                    <div class="titre">
                        <h2 class="text-white">
                            ArcheoIT
                        </h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nobis sequi placeat maiores, a eveniet sapiente deserunt earum 
                        odit dolorum eos in, accusantium autem, dicta vitae. Vel atque voluptatum error.
                    </p>
                    <a href="" class="btn btn-secondary">En savoir +</a>
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
                    nos <span class="primary">activités</span>
                </h2>
                <div class="row">
                    <div class="col-md-4 my-1">
                        <a href="">
                            <div class="card">
                                <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                                <div class="card-body">
                                    <h5 class="card-title">Stages</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="">
                            <div class="card">
                                <img src="images/book.jpeg" class="card-img-top" alt="Archeo Book">
                                <div class="card-body">
                                    <h5 class="card-title">Revues</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 my-1">
                        <a href="">
                            <div class="card">
                                <img src="images/meeting_1.jpeg" class="card-img-top" alt="Archeo meeting">
                                <div class="card-body">
                                    <h5 class="card-title">Conférences</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
        <div class="container">
            <h2 class="text-center">
                notre <span>actualités</span>
            </h2>
            <div class="row">
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                        <div class="card-body">
                            <h5 class="card-title">Dernières découvertes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lire +</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                        <div class="card-body">
                            <h5 class="card-title">Dernières découvertes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lire +</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                        <div class="card-body">
                            <h5 class="card-title">Dernières découvertes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lire +</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="card">
                        <img src="images/banner.jpeg" class="card-img-top" alt="Archeo search">
                        <div class="card-body">
                            <h5 class="card-title">Dernières découvertes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Lire +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Actus section-->

    <!--Call to action -->
    <section class="cta p-5">
        <div class="container">
           <div class="row">
                <div class="col-md-8">
                    <p> Envie de participer à nos stages pour enfants et adultes ?
                        N'attendez plus rien inscrivez-vous dès maintenant à une section de stage
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="" class="btn btn-primary">inscription</a>
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