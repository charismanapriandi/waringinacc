@section('title', 'home')

    @extends('layouts.app')

@section('style')
    <style>
        #logo {
            font-size: 25px;
            transition: all 1s ease 0s;
        }

        #navbar {
            padding: 30px;
            transition: all 1s ease 0s;
        }

    </style>
@endsection

@section('content')
    {{-- header --}}
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/header1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PRODUK 1</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quo! Sequi ad facilis
                        molestias saepe beatae similique iure voluptatibus vel ratione nam quis, veritatis, suscipit magni
                        hic unde odit excepturi?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/header2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PRODUK 2</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quo! Sequi ad facilis
                        molestias saepe beatae similique iure voluptatibus vel ratione nam quis, veritatis, suscipit magni
                        hic unde odit excepturi?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/header3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PRODUK 3</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quo! Sequi ad facilis
                        molestias saepe beatae similique iure voluptatibus vel ratione nam quis, veritatis, suscipit magni
                        hic unde odit excepturi?</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        {{-- highlight --}}
        <div class="highlight py-4 my-4">
            <img class="w-100" src="/images/iklan.jpg" alt="">
        </div>
        {{-- panel 1 --}}
        <div class="my-panel py-4 my-4">
            <h4 class="text-uppercase px-4">perdana dan kuota</h4>
            <div class="container">
                <div class="row py-4 d-flex justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-orange text-white">Selengkapnya</button>
            </div>
        </div>
        {{-- panel 2 --}}
        <div class="my-panel py-4 my-4">
            <p class="page-title px-4">Handphone</p>
            <div class="container">
                <div class="row py-4 d-flex justify-content-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="images/pict1.jpg">
                                    <img class="pic-2" src="images/pict2.jpg">
                                </a>
                                <ul class="user-action">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/productView"><i class="fas fa-search-plus"></i></a></li>
                                </ul>
                                <span class="product-new-label">New</span>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Iphone 11 pro</a></h3>
                                <div class="price">
                                    Rp10.000.000
                                    <span>Rp11.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-orange text-white">Selengkapnya</button>
            </div>
        </div>
        {{-- panel blog --}}
        <div class="my-panel py-4 my-4">
            <h4 class="text-uppercase px-4">blog post's</h4>
            <div class="container ">
                <div class="row py-4 d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="blog-grid">
                            <div class="blog-image">
                                <a href="#">
                                    <img src="images/blog-pict1.jpg">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h3>
                                <div class="content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consequatur impedit quia
                                    et ratione.
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="/blogSites">
                                    <button class="btn btn-orange text-white">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid">
                            <div class="blog-image">
                                <a href="#">
                                    <img src="images/blog-pict1.jpg">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h3>
                                <div class="content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consequatur impedit quia
                                    et ratione.
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="/blogSites">
                                    <button class="btn btn-orange text-white">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid">
                            <div class="blog-image">
                                <a href="#">
                                    <img src="images/blog-pict1.jpg">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h3>
                                <div class="content">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos consequatur impedit quia
                                    et ratione.
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pb-3">
                                <a href="/blogSites">
                                    <button class="btn btn-orange text-white">Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">Lebih Banyak Lagi >></a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.padding = "5px";
                document.getElementById("logo").style.fontSize = "20px";
                document.getElementById("navbar").classList.add("nav-solid");
            } else {
                document.getElementById("navbar").style.padding = "30px";
                document.getElementById("logo").style.fontSize = "25px";
                document.getElementById("navbar").classList.remove("nav-solid");
            }
        }

    </script>
@endsection
