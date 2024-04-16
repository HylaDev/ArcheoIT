<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcheoIT - Sites Fouilles</title>
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
                <a href="contact.php" class="btn btn-primary">contactez-nous</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End Nav section-->

    <!-- Breadcrumbs section--> <br><br>
    <section class='breads mt-5'>
        <div class="container">
            <div class="d-flex">
                <a href="/ArcheoIT/index.php" class="">Accueil</a> <span class="mx-2">/</span> <p class="actif">sites de fouille</p>
            </div>
            <hr>
        </div>
    </section>
    <!-- End Breadcrumbs section-->

    <!-- sites section-->
    <section class='sites p-5'>
        <div class="container">
            <h2 class=" text-center">
                sites <span class="">de fouilles</span>
            </h2>
            <p class="text-center">nous avons des sites de fouilles un peu partout en France</p>

            <div class="row">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1BQngABLstnml8o1Y-injqWpk5EkEuZg&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
            </div>
        </div>
    </section>
    <!-- End sites section-->

    
  

    <!--Call to action -->
    <section class="cta p-5 my-bg-primary">
        <div class="container">
           <div class="row">
                <div class="col-md-8">
                    <p class="text-white"> Envie de participer à nos stages pour enfants et adultes ?
                        N'attendez plus rien inscrivez-vous dès maintenant à une section de stage.
                        
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="contact.php#inscription" class="btn btn-secondary">inscription <i class="fa fa-arrow-right"></i></a>
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