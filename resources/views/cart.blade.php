@extends('layouts/app')

@section('title', 'keranjang')

@section('content')
    <div class="container cmt-80">
        <div class="my-panel my-4 py-2">
            <p class="page-title px-4">Keranjang</p>
            <div class="cart-list">
                <div class="row">
                    <div class="col-3">
                        <img class="img-thumbnail" src="/images/header1.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12 my-2">
                                <div class="product-title">
                                    <a href="/productView">
                                        Iphone 11 Pro
                                    </a>       
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 ">
                                <p class="">
                                    Jumlah
                                </p>
                            </div>
                            <div class="col-10">
                                <div class="row ml-1">
                                    <button class="btn btn-orange text-white" id="minus">-</button>
                                    <input type="type" class="qty text-center" value="1">
                                    <button class="btn btn-orange text-white" id="plus">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 my-2">
                                <div class="product-price">
                                    <span>Rp10.000.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 my-2">
                                <div class="d-flex justify-content-end">
                                    <a href="#">
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <a class="nav-link btn btn-orange" href="/pembayaran">Bayar</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection
