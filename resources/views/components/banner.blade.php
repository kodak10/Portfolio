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
                             
                            </h5>
                        </div>
                        <div class="description">
                            <p>
                                
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