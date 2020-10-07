@section('title')
    Daftar Produk
@endsection
@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-center m-4 search">
        <input type="text" placeholder="nama produk">
        <a href="#">
            <button class="btn btn-orange text-white">
                <i class="fa fa-search"></i>
            </button>
        </a>
    </div>
    <div class="container-fluid">

        <div class="my-panel p-4">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="my-opt p-2 m-2">
                        <img src="images/pict1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">product name</h4>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias,.</p>
                            <div class="btn-aksi">
                                <button class="btn btn-orange text-white">edit</button>
                                <button class="btn btn-danger remove">hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="my-opt p-2 m-2">
                        <img src="images/pict1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">product name</h4>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias,.</p>
                            <div class="btn-aksi">
                                <button class="btn btn-orange text-white">edit</button>
                                <button class="btn btn-danger remove">hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="my-opt p-2 m-2">
                        <img src="images/pict1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">product name</h4>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias,.</p>
                            <div class="btn-aksi">
                                <button class="btn btn-orange text-white">edit</button>
                                <button class="btn btn-danger remove">hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="my-opt p-2 m-2">
                        <img src="images/pict1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">product name</h4>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias,.</p>
                            <div class="btn-aksi">
                                <button class="btn btn-orange text-white">edit</button>
                                <button class="btn btn-danger remove">hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-orange rounded-circle btn-admin text-white">
        <i class="fa fa-plus"></i>
    </button>
    <script>
        const container = document.querySelector('.my-panel');

        container.addEventListener('click', function(el) {
            if (el.target.className == 'remove') {
                alert()
            }

        })

        // const result = confirm("Want to delete?");
        // if (result) {
        //     //Logic to delete the item
        // }

    </script>
@endsection
