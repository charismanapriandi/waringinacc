@section('title', 'about')
    @extends('layouts.app')
@section('content')
    <div class="container cmt-80">
        <div class="my-panel my-4 py-2">
            <p class="page-title px-4">Wishlist</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, corrupti ducimus, unde quisquam
                            perferendis, obcaecati velit quos blanditiis quae rem error ratione quis soluta? Eum ea dolor
                            architecto modi corrupti?</p>
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
@endsection
