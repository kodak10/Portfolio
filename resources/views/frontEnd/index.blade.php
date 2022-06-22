<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO - KOUASSI ATCHIN PARFAIT AYMARD</title>

    <link rel="stylesheet" href="{{asset('style.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    
    <link rel="stylesheet" href="asses/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
</head>
<body>
    
    <div class="wrapper">
        <header class="header" id="header" >
            <nav id="navbar"  class=" navbar   navbar-expand-lg navbar-light bg-light" id="navbar">
                <div class="container">
                  <a class="navbar-brand" href="#">KODAK</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#about">Qui suis-je ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#skills">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Réalisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contact</a>
                        </li>
                        <li class="nav-item bar">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Langue
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Francais</a></li>
                                <li><a class="dropdown-item" href="#">Amglais</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa-solid fa-moon"></i></a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row txt">
                            <div class="col lg-3 social">
                                <div class="content">
                                    <a href=""><span><i class="fa-brands fa-github"></i></span></a>
                                    <a href=""><span><i class="fa-brands fa-facebook"></i></span></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="name_job">
                                    
                                    <h3>
                                        Hey, Je suis 
                                        @foreach ($banner as $banners )
                                            {{ $banners->name }}
                                        @endforeach
                                    </h3>
                                    <h5>
                                        @foreach ($banner as $banners )
                                        {{ $banners->job }}
                                        @endforeach
                                    </h5>
                                </div>
                                <div class="description">
                                    <p>
                                        @foreach ($banner as $banners )
                                        {{ $banners->paragraphe }}
                                        @endforeach
                                    </p>
                                    <button><a href="">Contactez moi <span><i class="fa-solid fa-angles-right"></i></span></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="content">
                            <img class="w-100" src="assets/images/banner.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="about" id="about">
            <h3 class="text-center">Qui suis-je ?</h3>
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-5">
                        <img class="mt-4" src="assets/images/about.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="description mt-4">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt nostrum, laboriosam sed nulla vel eius molestias ducimus consequatur, assumenda temporibus odio doloremque quo consequuntur veniam, blanditiis qui fugit! Cumque, ipsum?</p>
                        </div>
                        <div class="experience">
                            <div class="year">
                                <p>
                                    <span class="number">+3</span><br>
                                    <span class="texte">Année d'expérience</span>
                                </p>
                            </div>
                            <div class="projects">
                                <p>
                                    <span class="number">+5</span><br>
                                    <span class="texte">Projets réalisés</span>
                                </p>
                            </div>
                        </div>
                        <button><a href=""><span><i class="fa-solid fa-download"></i></span> Telecharger mon CV</a></button>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="skills" id="skills">
            <div class="container ">
                <h3 class="text-center mb-5">Mes Compétences</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="accordion mb-5" id="web">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Developpement Web
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#web">
                                    <div class="accordion-body">
                                        <div class="langage">
                                            <span>Langages</span>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">HTML / CSS / JAVASCRIPT</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">PHP</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">REACT</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="langage">
                                            <span>Framework</span>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">BOOTSTRAP</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">LARAVEL</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">VUE-JS</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                            <div class="content p-2">
                                                <div class="skills_title">
                                                    <h5 class="skills_name">REACT JS</h5>
                                                    <span class="skills_number">50%</span>
                                                </div>
                                                <div class="skills_pourcentage">
                                                    <progress class="w-100" value="50" max="100"></progress>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="accordion mb-5" id="mobile">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                  Developpement Mobile
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#mobile">
                                <div class="accordion-body">
                                    <div class="langage">
                                        <span>Langages</span>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">DART</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="langage">
                                        <span>Framework</span>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">FLUTTER</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">REACT NATIVE</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="accordion mb-5" id="designer">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFree" aria-expanded="true" aria-controls="collapseFree">
                                    Designer
                                </button>
                              </h2>
                              <div id="collapseFree" class="accordion-collapse collapse" aria-labelledby="headingFree" data-bs-parent="#designer">
                                <div class="accordion-body">
                                    <div class="langage">
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">PHOTOSHOP</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">ILLUSTRATOR</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">ADOBE XD</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">FIGMA</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="accordion mb-5" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForth" aria-expanded="true" aria-controls="collapseForth">
                                    Autres
                                </button>
                              </h2>
                              <div id="collapseForth" class="accordion-collapse collapse" aria-labelledby="headingForth" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="langage">
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">.NET</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                        <div class="content p-2">
                                            <div class="skills_title">
                                                <h5 class="skills_name">REACT</h5>
                                                <span class="skills_number">50%</span>
                                            </div>
                                            <div class="skills_pourcentage">
                                                <progress class="w-100" value="50" max="100"></progress>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="parcours" id="parcours">
            <div class="container">
                <nav class="d-flex justify-content-center">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <i class="fa-solid fa-school" class="nav-link active" id="nav-school-tab" data-bs-toggle="tab" data-bs-target="#nav-school" type="button" role="tab" aria-controls="nav-school" aria-selected="true"></i>
                        <i class="fa-solid fa-briefcase" class="nav-link" id="nav-work-tab" data-bs-toggle="tab" data-bs-target="#nav-work" type="button" role="tab" aria-controls="nav-work" aria-selected="false"></i>
                    </div>
                </nav>
                  <div class="tab- text-center mb-5" id="nav-tabContent">
                    <div class="tab-pane fade active" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">
                        Education
                    </div>
                    <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                        Work
                    </div>
                  </div>
                  
            </div>
        </div>

        <div class="services" id="services">
            <div class="container justify-content-center">
                <h3 class="text-center">Mes services</h3>
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div class="box">
                            <div class="content">
                                <span><i class="fa-solid fa-browser"></i> Developpement Web</span><br>
                                <span class="more"><i class="fa-solid fa-plus"></i> Plus d'infos</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="box">
                            <div class="content">
                                <span><i class="fa-solid fa-browser"></i> Developpement Mobile</span><br>
                                <span class="more"><i class="fa-solid fa-plus"></i> Plus d'infos</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="box">
                            <div class="content">
                                <span><i class="fa-solid fa-browser"></i> Design</span><br>
                                <span class="more"><i class="fa-solid fa-plus"></i> Plus d'infos</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="box">
                            <div class="content">
                                <span><i class="fa-solid fa-browser"></i> Autres</span><br>
                                <span class="more"><i class="fa-solid fa-plus"></i> Plus d'infos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial" id="testimonial">
            <div class="container">
                <h3 class="text-center">Temoignages</h3>
 
                <div class="owl-carousel">
                    <div class="item">
                        <div class="image">
                            <img  src="assets/images/about.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aspernatur ex ullam quibusdam atque vel similique at nostrum consectetur, fuga eveniet rem odio ea magnam rerum dolores nisi suscipit voluptatum.</p>
                                .testimonial_name
                            </div>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img  src="assets/images/about.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aspernatur ex ullam quibusdam atque vel similique at nostrum consectetur, fuga eveniet rem odio ea magnam rerum dolores nisi suscipit voluptatum.</p>
                            </div>
                            <button>Voir</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img  src="assets/images/about.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aspernatur ex ullam quibusdam atque vel similique at nostrum consectetur, fuga eveniet rem odio ea magnam rerum dolores nisi suscipit voluptatum.</p>
                            </div>
                            <button>Voir</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img  src="assets/images/about.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aspernatur ex ullam quibusdam atque vel similique at nostrum consectetur, fuga eveniet rem odio ea magnam rerum dolores nisi suscipit voluptatum.</p>
                            </div>
                            <button>Voir</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img  src="assets/images/about.jpg" alt="">
                        </div>
                        <div class="desc">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, aspernatur ex ullam quibusdam atque vel similique at nostrum consectetur, fuga eveniet rem odio ea magnam rerum dolores nisi suscipit voluptatum.</p>
                            </div>
                            <button>Voir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <!-- <div class="container-fluid project mb-5">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="content">
                                <p>Vous avez un projet que vous voulez montez ? <br>contactez moi pour en discuté.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/images/banner.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
 -->
           






    </div>

    <script src="{{asset('js/app.js')}}">

    </script>
    <script>
        $(document).ready(function(){
           

            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    }
                }
            })
        });
    </script>
</body>
</html>