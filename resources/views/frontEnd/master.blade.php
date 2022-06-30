<!DOCTYPE html>
<html lang="fr | EN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PORTFOLIO - KOUASSI ATCHIN PARFAIT AYMARD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts --->

    

    
    <script>
        $('.counter').counterUp({
            delay: 40, //nombre par seconde
            time: 5500, //duree de l'animation
        });
  </script>

</head>
<body>
    
    <div class="wrapper">

        <header class="header" id="header" >
            <nav id="navbar"  class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <div class="container">
                  <a class="navbar-brand" href="#">KODAK</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><span><i class="fa-solid fa-house"></i></span><br> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#about"><span><i class="fa-solid fa-address-card"></i></span><br> Qui suis-je ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#skills"><span><i class="fa-solid fa-house"></i></span><br> Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><span><i class="fa-solid fa-house"></i></span> <br> Réalisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa-solid fa-code"></i> <br> Tutorials</a>
                        </li>
                        <li class="nav-item bar">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fa-solid fa-language"></i></span> <br>  Langue
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Francais</a></li>
                                <li><a class="dropdown-item" href="#">Anglais</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa-solid fa-user"></i> <br> Login</a>
                        </li>
                       
                    </ul>
                  </div>
                </div>
            </nav>
        </header>

        <section class="banners">
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7" data-aos="fade-right" data-aos-offset="300"
                        data-aos-delay="0"
                        data-aos-duration="2000">
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
                                            <span>Hey, Je suis</span> 
                                            @foreach ($banner as $banners )
                                                {{ $banners->name }}
                                            @endforeach
                                        </h3>
                                        
                                        <div id="typed-strings" class="mb-3">
                                            <span class="typed"></span>
                                        </div>
       
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
                                <img class="w-100" src="/images/banner.png" alt="" data-aos="fade-left" data-aos-offset="300"
                                data-aos-delay="0"
                                data-aos-duration="2000">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <div class="banner_mobile">
            <div class="container">
                <div class="row reverse">
                    <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-offset="300"
                    data-aos-delay="60"
                    data-aos-duration="2000">
                        <div class="name_job">
                            <h3>
                                <span>Hey, Je suis</span> 
                                @foreach ($banner as $banners )
                                    {{ $banners->name }}
                                @endforeach
                            </h3>
                            
                            <div id="typed-strings" class="mb-3">
                                <span class="typed_mobile"></span>
                            </div>
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
                    <div class="col-lg-6 col-md-12">
                        <div class="contents" data-aos="fade-up" data-aos-offset="300"
                        data-aos-delay="60"
                        data-aos-duration="2000">
                            <div class="image">
                                <img class="w-100" src="/images/banner.png" alt="">
                            </div>
                            <div class="socials">
                                <div class="content">
                                    <a href=""><span><i class="fa-brands fa-github"></i></span></a>
                                    <a href=""><span><i class="fa-brands fa-facebook"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="abouts">
            <div class="about" id="about">
                <h3 class="title">Qui suis-je ?</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="mt-4" src="/images/about.png" alt="Image About" data-aos="fade-up" data-aos-offset="300"
                            data-aos-delay="60"
                            data-aos-duration="2000">
                        </div>
                        <div class="col-lg-7" data-aos="fade-up" data-aos-offset="300"
                        data-aos-delay="60"
                        data-aos-duration="2000">
                            <div class="description mt-4">
                                <p>
                                    @foreach ($about as $abouts )
                                        {{ $abouts->textAbout }}
                                    @endforeach
                                </p>
                            </div>
                            <div class="experience">
                                <div class="year">
                                    <p>
                                        <span class="number ">
                                            @foreach ($about as $abouts )
                                                {{ $abouts->anneeExperience }}
                                            @endforeach
                                        </span><br>
                                        <span class="texte">Années d'expériences</span>
                                        <span  class="span counter">500 </span>
                                    </p>
                                </div>
                                <div class="projects">
                                    <p>
                                        <span class="number counter">
                                            @foreach ($about as $abouts )
                                                {{ $abouts->projetRealise }}
                                            @endforeach
                                        </span><br>
                                        <span class="texte">Projets réalisés</span>
                                    </p>
                                </div>
                            </div>
                            <button><a href=""><span><i class="fa-solid fa-download"></i></span> Telecharger mon CV</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="skill">
            <div class="skills" id="skills">
                <div class="container ">
                    <h3 class="title">Mes Compétences</h3>
                    <div class="row justify-content-center">
                        @foreach ($competence as $competences )
                            <div class="col-lg-5" data-aos="zoom-in" data-aos-offset="300"
                            data-aos-delay="60"
                            data-aos-duration="2000">
                                
                                <div class="accordion mb-4" id="web">
                                    <div class="accordion-item">            
    
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                {{ $competences->title }}
                                            </button>
                                        </h2>
    
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#web">
                                            <div class="accordion-body">
                                                
                                                    <div class="content p-2">
                                                        @foreach ( $competences->competencesdetail as $competence )
                                                            <div class="skills_title">
                                                                <h5 class="skills_name">{{ $competence->lib  }}</h5>
                                                                <span class="skills_number">{{ $competence->pourcentage}}%</span>
                                                            </div>
                                                            <div class="skills_pourcentage">
                                                                <progress class="w-100" value="{{ $competence->pourcentage}}" max="100"></progress>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                
                                            </div>
                                        </div>
    
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

       <section class="parcour">
        <div class="parcours" id="parcours">
            <h3 class="title">Mon Parcours</h3>
                <div class="container">
                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <i class="fa-solid fa-school" class="nav-link active" id="nav-school-tab" data-bs-toggle="tab" data-bs-target="#nav-school" type="button" role="tab" aria-controls="nav-school" aria-selected="true"></i>
                            <i class="fa-solid fa-briefcase" class="nav-link" id="nav-work-tab" data-bs-toggle="tab" data-bs-target="#nav-work" type="button" role="tab" aria-controls="nav-work" aria-selected="false"></i>
                        </div>
                    </nav>
    
                    <div class="tab-content mb-5" id="nav-tabContent">
    
                        <div class="tab-pane fade active show" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">
                            <h4 class="text-center">Scolaire</h4>
                           <div class="timeline mt-2" >
                                <div class="trait"></div>
                                
                                <ul>
                                    @foreach ($education as $educations )
                                          
                                    <li data-aos="fade-up" data-aos-offset="300"
                                    data-aos-delay="60"
                                    data-aos-duration="2000">
                                        <div class="timeline_content">
                                            <span>{{$educations->anneeDebut}}</span> - <span>{{$educations->anneeFin}}</span>
                                            <p>{{$educations->description}}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
    
                        <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                            <h4 class="text-center">Professionel</h4>
                           <div class="timeline mt-2">
                                <div class="trait"></div>
                                <ul>
                                    @foreach ($work as $works )
                                          
                                        <li data-aos="fade-up" data-aos-offset="300"
                                        data-aos-delay="60"
                                        data-aos-duration="2000">
                                            <div class="timeline_content">
                                                <span>{{$works->anneeDebut}}</span> - <span>{{$works->anneeFin}}</span>
                                                <p class="job">{{$works->job}} <span>à</span> {{$works->entreprise}}</p>
                                                <p>{{$works->description}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
       </section>


        <section class="services">
            
            <div class="container service">
                <h3 class="title">Mes Services</h3>
                <div class="row">
                    @foreach ( $service as $services )
                        
                        <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300"
                        data-aos-delay="60"
                        data-aos-duration="2000">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="icon">
                                        <i class="fa-solid fa-globe "></i> <!-- Ajouter un champs icon pour selection la classe du fontaweasome -->
                                    </div>
                                    <div class="details">
                                        <h5 class="card-title">{{$services->title}}</h5>
                                        <p class="card-text">Decouvrez mes competences en la matière</p>
                                        <a type="button" href="{{$services->id}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CompetenceDetail"><i class="fa fa-link"></i> Consulter</a>
                                       
                                    </div>
                            </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Modal -->

                        <div class="modal fade" id="CompetenceDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="">Detail de mes compétences</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="content p-2">
                                        @foreach ($services->servicesdetail as $services )
                                            <span>{{ $services->libservice }} %</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  
                                </div>
                            </div>
                            </div>
                        </div>    

                    <!-- Fin de Modal -->
                </div>
            </div>
        </section>


        <section class="realisations">
            <div class="container realisation">
                <h3 class="title">Mes Réalisations</h3>
                <div class="owl-carousel realisation" data-aos="fade-up" data-aos-offset="300"
                data-aos-delay="60"
                data-aos-duration="2000">
                    @foreach ($portfolio as $portfolios )
                        <div class="item">
                           <div class="row">
                                <div class="col-lg-6">
                                    <div class="image">
                                        <img  src="/images/about.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content">
                                        <p>{{$portfolios->text}}</p>
                                        <span>{{$portfolios->lieu}}</span> <br><!-- Je me suis trompé au lieu de mettre Lien j'ai mis Lieu -->
                                        <a href="{{$portfolios->image}}">Voir</a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="projects">
            <div class="container-fluid project">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="content_text">
                                    <h5>
                                        Vous avez un projet à réaliser ? <a href="">Contactez moi</a> <br>
                                        pour la réalisation de votre projet. 
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="content_image">
                                    <img src="/images/project.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

       <section class="testimonials">
            <div class="testimonial" id="testimonial">
                <div class="container">
                    <h3 class="title">Témoignages</h3>
                    <div class="owl-carousel" data-aos="fade-up" data-aos-offset="300"
                    data-aos-delay="60"
                    data-aos-duration="2000">
                        @foreach ($testimonial as $testimonials )
                            <div class="item">
                                <div class="image">
                                    <img  src="/images/testimonial.png" alt="">
                                </div>
                                <div class="desc">
                                    <div class="content">
                                        <p>{{$testimonials->text}}</p>
                                        <span>{{$testimonials->nom}} - {{$testimonials->fonction}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
       </section>

        <footer class="text-center p-4">
            Footer
        </footer>

        <div class="vide"></div>

        

      

       
        
    </div>

   

    

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('js/script.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{asset('/js/jquery.waypoints.js')}}"></script>
    <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>    

    <script>
        AOS.init();
    </script>




    <script>
        $(document).ready(function(){

            var typed = new Typed('.typed', {
            
            strings: ['Developpeur Web', '', 'Developpeur Mobile'],
            smartBackspace: true, // this is a default
                loop: true,
                startDelay: 50,
                typeSpeed: 70,
                backSpeed:50,
            });

            var typed = new Typed('.typed_mobile', {
            
            strings: ['Developpeur Web', '', 'Developpeur Mobile'],
            smartBackspace: true, // this is a default
                loop: true,
                startDelay: 50,
                typeSpeed: 70,
                backSpeed:50,
            });

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

           $('.realisation').owlCarousel({
               loop:true,
               margin:10,
               nav:true,
               drag:none,
               responsive:{
                   0:{
                       items:1
                   },
                   600:{
                       items:1
                   },
                   1000:{
                       items:1
                   }
               }
           })
       });
    </script>

    
    
</body>
</html>