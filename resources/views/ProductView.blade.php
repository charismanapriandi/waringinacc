@section('title', 'product Name')

    @extends('layouts.app')

@section('content')
    <div class="container cmt-80">
        <div class="my-panel my-4 py-2">
            <div class="row">
                <div class="col-md col-sm-12 m-2 gallery">
                    <div class="col-md-12 p-4">
                        <img class="img-fluid" id="expandedImg" src="images/thumbnail1.jpg" alt="">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 col-3">
                            <img src="images/thumbnail1.jpg" alt="" class="img-thumbnail img-thumbnail-gallery">
                        </div>
                        <div class="col-md-3 col-3">
                            <img src="images/thumbnail2.jpg" alt="" class="img-thumbnail img-thumbnail-gallery">
                        </div>
                        <div class="col-md-3 col-3">
                            <img src="images/thumbnail3.jpg" alt="" class="img-thumbnail img-thumbnail-gallery">
                        </div>
                        <div class="col-md-3 col-3">
                            <img src="images/thumbnail4.jpg" alt="" class="img-thumbnail img-thumbnail-gallery">
                        </div>
                    </div>
                </div>
                <div class="col-md col-sm-12 py-2">
                    <div class="container">
                        <h4 class="text-capitalize">iphone 11 Pro</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quae error saepe esse voluptate
                            alias facere unde, rem reprehenderit earum dolorum vero sequi delectus soluta, omnis accusamus
                            nisi
                            possimus modi!</p>
                        <div class="row py-2">
                            <div class="col-3 text-right">
                                Harga
                            </div>
                            <div class="col-9 bl-orange">
                                10.000.000
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 text-right">
                                Jumlah
                            </div>
                            <div class="col-9 bl-orange">
                                <div class="row ml-1">
                                    <button class="btn btn-orange text-white" id="minus">-</button>
                                    <input type="type" class="qty text-center" value="1">
                                    <button class="btn btn-orange text-white" id="plus">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 text-right">
                                warna
                            </div>
                            <div class="col-9 bl-orange">
                                <div class="row ml-1 " id="selectColor">

                                    <div class="ready-color red mr-3"></div>
                                    <div class="ready-color blue mr-3"></div>
                                    <div class="ready-color green mr-3"></div>
                                    <div class="ready-color red mr-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="p-4">Spesifikasi</h5>
            <div class="row px-4 spec">
                <table class="table table-sm table-borderless text-white">
                    <tbody>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">Jaringan</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Technology</th>
                                        <td>GSM / CDMA / HSPA / EVDO / LTE</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">BODY</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Dimensions</th>
                                        <td>144 x 71.4 x 8.1 mm (5.67 x 2.81 x 0.32 in)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Weight</th>
                                        <td>188 g (6.63 oz)</td>
                                    </tr>
                                    <tr>
                                        <th>Build</th>
                                        <td>Glass front (Gorilla Glass), glass back (Gorilla Glass), stainless steel frame
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">SIM</th>
                                        <td>Nano-SIM and/or eSIM</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">layar</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Type</th>
                                        <td>Super Retina XDR OLED capacitive touchscreen, 16M colors</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Size</th>
                                        <td>5.8 inches, 84.4 cm2 (~82.1% screen-to-body ratio)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Resolution</th>
                                        <td>1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Protection</th>
                                        <td>Scratch-resistant glass, oleophobic coating</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">peron</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">os</th>
                                        <td>iOS 13, dapat ditingkatkan ke iOS 14</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Chipset</th>
                                        <td>Apel A13 Bionic (7 nm +)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">CPU</th>
                                        <td>Hexa-core (Petir 2x2,65 GHz + Petir 4x1,8 GHz)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">GPU</th>
                                        <td>GPU Apple (grafis 4-inti)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">PENYIMPANAN</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">kartu memory</th>
                                        <td>Tidak</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Internal</th>
                                        <td>64GB RAM 4GB, 256GB RAM 4GB, 512GB RAM 4GB</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">KAMERA UTAMA</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Triple</th>
                                        <td>12 MP, f / 1.8, 26mm (lebar), 1 / 2.55 ", 1.4µm, piksel ganda PDAF, OIS.
                                            12 MP, f / 2.0, 52mm (telefoto), 1 / 3.4", 1.0µm, PDAF, OIS, 2x zoom optik.
                                            12 MP, f / 2.4, 13mm (ultrawide), 1 / 3.6 "</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">fitur</th>
                                        <td>Flash dua warna LED quad, HDR (foto / panorama)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Video</th>
                                        <td>4K @ 24/30 / 60fps, 1080p @ 30/60/120 / 240fps, HDR, rekam suara stereo.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">KAMERA SELFIE</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Ganda</th>
                                        <td>12 MP, f / 2.2, 23mm (lebar), 1 / 3.6 "
                                            SL 3D, (sensor kedalaman / biometrik)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">fitur</th>
                                        <td>HDR</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Video</th>
                                        <td>4K @ 24/30 / 60fps, 1080p @ 30/60 / 120fps, gyro-EIS</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-right text-uppercase">SUARA</th>
                            <td class="bl-orange">
                                <table>
                                    <tr>
                                        <th class="text-capitalize">Pengeras suara</th>
                                        <td>Ya, dengan speaker stereo</td>
                                    </tr>
                                    <tr>
                                        <th class="text-capitalize">Colokan 3,5 mm</th>
                                        <td>Tidak</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
    </div>

    <nav class="navbar navbar-expand-sm navbar-dark nav-solid fixed-bottom">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link">
                        <span>Rp10.000.000</span>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link btn btn-outline-danger px-3" href="#">
                        <i class="fa fa-heart"></i>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link btn btn-outline-orange text-orange" href="#">Beli</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link btn btn-orange" href="#">+ Keranjang</a>
                </li>
            </ul>
        </div>
    </nav>

@endsection

@section('script')
    <script>
        const gallery = document.querySelector(".gallery");
        const expandedImg = document.querySelector('#expandedImg');

        gallery.addEventListener('click', function(e) {
            if (e.target.className == 'img-thumbnail') {
                expandedImg.src = e.target.src;
                expandedImg.classList.add('fade');
                setTimeout(function() {
                    expandedImg.classList.remove('fade')
                }, 500)
            }
        });

    </script>
@endsection
