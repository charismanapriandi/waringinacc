<nav class="navbar navbar-expand-lg navbar-dark nav-color-03 fixed-top{{ request()->is('/') ? '' : ' nav-solid' }}"
    id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#" id="logo">Waringin Acc</a>
        <button class="navbar-toggler right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/productPage">Produk Baru</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Produk 1</a>
                        <a class="dropdown-item" href="#">Produk 2</a>
                        <a class="dropdown-item" href="#">Produk 3</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/wishlist">
                        <i class="nav-link fa fa-heart"></i>
                    </a>
                </li>
                <li class="nav-item{{ request()->is('/cart') ? ' active' : '' }}">
                    <a href="/cart">
                        <i class="nav-link fa fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
        </div>



    </div>
</nav>
