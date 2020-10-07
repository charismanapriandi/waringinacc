<footer class="page-footer my-panel pt-4{{ request()->is('cart', 'productView') ? ' mb-50' : '' }}">
    <div class="container-fluid text-center text-md-left">
        <div class="row ">
            {{-- left --}}
            <div class="col-md-5 mt-md-0 mt-3">
                <h5 class="text-uppercase">waringin ACC</h5>
                <div class="bl-orange">
                    <p class="ml-3">jalan Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus pariatur
                        officiis, neque molestias deleniti saepe a illum nesciunt velit nostrum vel odio fuga eaque nemo
                        incidunt ab. Impedit, excepturi tempora. <a href="#">Maps>></a></p>
                </div>
                <div class="bl-orange">
                    <p class="ml-3">jalan Lorem ipsum dolor sit amet consectetur adipisicing elit. <a
                            href="#">Maps>></a></p>
                </div>
                <div class="social ml-3">
                    <div class="row">
                        <div class="col-12">
                            <i class="fas fa-phone mr-2"></i>
                            <a href="#">0871xxxxxxxx</a>
                        </div>
                        <div class="col-12">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="#">Waringin@waringin.acc</a>
                        </div>
                    </div>
                    <ul class="list-group list-group-horizontal border-0 py-3 d-flex justify-content-center">
                        <a href="">
                            <li class="fab fa-twitter fa-lg p-2"></li>
                        </a>
                        <a href="">
                            <i class="fab fa-facebook fa-lg p-2"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram fa-lg p-2"></i>
                        </a>
                    </ul>
                </div>
            </div>
            {{-- middle --}}
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">INFORMASI</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/syaratDanKetentuan">Syarat dan Ketentuan</a>
                    </li>
                    <li>
                        <a href="/about">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="/store">Toko Kami</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
            {{-- right --}}
            <div class="col-md-4 mb-md-0 mb-3">
                <h5 class="text-uppercase">Subscribe</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor facilis quam nam impedit
                    quos!</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Masukkan Email Anda">
                    </div>
                    <button type="submit" class="btn btn-orange text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">Corporation Name</a>
    </div>
</footer>
