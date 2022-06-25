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
                                        <span>Hey, Je suis</span> 
                                        @foreach ($banner as $banners )
                                            {{ $banners->name }}
                                        @endforeach
                                    </h3>
                                    @foreach ($banner as $banners )
                                        <div id="typed-strings">
                                            <span id="typed">{{ $banners->job }}</span>
                                        </div>
                                    @endforeach
                                   
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
                            <img class="w-100" src="/images/banner.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="banner_mobile">
            <div class="container">
                <div class="row reverse">
                    <div class="col-lg-6 col-md-12">
                        <div class="name_job">
                            <h3>
                                <span>Hey, Je suis</span> 
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
                    <div class="col-lg-6 col-md-12">
                        <div class="contents">
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

        <div class="about" id="about">
            <h3 class="text-center">Qui suis-je ?</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="mt-4" src="assets/images/about.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
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
                                    <span class="number">
                                        @foreach ($about as $abouts )
                                            {{ $abouts->anneeExperience }}
                                        @endforeach
                                    </span><br>
                                    <span class="texte">Année d'expérience</span>
                                </p>
                            </div>
                            <div class="projects">
                                <p>
                                    <span class="number">
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

        <div class="skills" id="skills">
            <div class="container ">
                <h3 class="text-center mb-5">Mes Compétences</h3>
                <div class="row justify-content-center">
                    @foreach ($competence as $competences )
                        <div class="col-lg-5">
                            
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

        <div class="parcours" id="parcours">
            <div class="container">
                <nav class="d-flex justify-content-center">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <i class="fa-solid fa-school" class="nav-link active" id="nav-school-tab" data-bs-toggle="tab" data-bs-target="#nav-school" type="button" role="tab" aria-controls="nav-school" aria-selected="true"></i>
                        <i class="fa-solid fa-briefcase" class="nav-link" id="nav-work-tab" data-bs-toggle="tab" data-bs-target="#nav-work" type="button" role="tab" aria-controls="nav-work" aria-selected="false"></i>
                    </div>
                </nav>

               

                    <div class="tab-content text-center mb-5" id="nav-tabContent">

                        <div class="tab-pane fade active show" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">
                            <ul>
                                @foreach ($education as $educations )
                                    <li>
                                        {{$educations->anneeDebut}} - {{$educations->anneeFin}}
                                    </li>
                                    <p>{{$educations->description}}</p>

                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                            <ul>
                                @foreach ( $work as $works )
                                    <li>
                                        {{$works->jj}} - {{$works->anneeFin}}
                                    </li>
                                    <p><span>{{$works->job}}</span> <span>{{$works->entreprise}}</span> </p>
                                    <p>{{$works->description}}</p>
                                @endforeach 
                            </ul>
                        </div>
                  </div>
            </div>
        </div>

        <div class="skills" id="skills"><!--services-->
            <div class="container ">
                <h3 class="text-center mb-5">Mes Services</h3>
                <div class="row justify-content-center">
                    @foreach ($service as $services )
                        <div class="col-lg-5">

                            <div class="accordion mb-5" id="web">
                                <div class="accordion-item">
                                    
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $services->title }}
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#web">
                                        <div class="accordion-body">
                                            <div class="langage">
                                                <div class="content p-2">
                                                    @foreach ( $services->service as $serviceDetails )
                                                        
                                                        <div class="skills_title">
                                                            <h5 class="skills_name">{{ $serviceDetails->libservice  }}</h5>
                                                        </div>
                                                    
                                                    @endforeach
                                                </div>
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

        <div class="testimonial" id="testimonial">
            <div class="container">
                <h3 class="text-center">Temoignages</h3>
                <div class="owl-carousel">
                    @foreach ($testimonial as $testimonials )
                        <div class="item">
                            <div class="image">
                                <img  src="assets/images/about.jpg" alt="">
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

      

       
        
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        $(document).ready(function(){

            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings'
            });

            var typed = new Typed('.element', {
  // Waits 1000ms after typing "First"
  strings: ['First ^1000 sentence.', 'Second sentence.']
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
       });
    </script>
    
</body>
</html>