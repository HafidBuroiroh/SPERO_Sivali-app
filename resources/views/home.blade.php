@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/home.css')}}">

@section('content')
    <div class="container d-flex"  id="top">
       <div class="container-fluid">
        <div class="row row__top">
            <div class="col-md-6 d-flex align-items-center">
                <div class="desc">
                    <h1>Sofa terbaru dengan kualitas terbaik</h1> 
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quis modi eius at quae fugit?</p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col-md-6 top__img">
                <img src="{{asset('../img/sofa-home.png')}}" width="110%" alt="">
            </div>
        </div>
       </div>
    </div>

    <div class="container-fluid mb-5 mt-5 mt-md-0">
        <h3 class="mb-5 text-center">Kategori Barang</h3>
        <div class="row d-flex justify-content-center text-center k_b">
            <div class="col-md-1 col-2 logo">
                <div class="logo__img">
                    <img src="{{asset('../img/bangku.png')}}" alt="">
                </div>
                <p class="mt-3">Bangku</p>
            </div>
            <div class="col-md-1 col-2 logo">
                <div class="logo__img">
                    <img src="{{asset('../img/sofa-vector.png')}}" alt="">
                </div>
                <p class="mt-3">Sofa</p>
            </div>
            <div class="col-md-1 col-2 logo">
                <div class="logo__img">
                    <img src="{{asset('../img/meja-vector.png')}}" alt="">
                </div>
                <p class="mt-3">Meja</p>
            </div>
            <div class="col-md-1 col-2 logo">
                <div class="logo__img">
                    <img src="{{asset('../img/kasur-vector.png')}}" alt="">
                </div>
                <p class="mt-3">Kasur</p>
            </div>
            <div class="col-md-1 col-2 logo">
                <div class="logo__img">
                    <img src="{{asset('../img/kamar-mandi-vector.png')}}" alt="">
                </div>
                <p class="mt-3">Kamar Mandi</p>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center mb-4 pb-4" style="background: #F5F6F8; height: max-content; margin-top: 10rem;">
        <div class="container">
            <div class="row gap-5 tfk" >
                <div class="col-md-5" id="tfk_left">
                    <img id="ab_lemari" src="{{asset('../img/furniture-home.png')}}" alt="">
                    <div class="circle position-relative">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                    </div>
                </div>
                <div class="col-md-6 d-flex" id="tfk_right">
                    <div class="cont_3">
                        <h1>Tentang Furniture Kita</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus facere blanditiis voluptatum labore aliquam fuga dicta voluptas vero porro!</p>
                        <a class="btn btn-primary" href="#" role="button">Selengkapnya >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 7rem;">
        <h1 class="text-center fw-bold">Katalog Kami</h1>
        <div class="menu d-flex gap-2 flex-wrap justify-content-center mt-5">
            <a class="btn menu_btn" href="#" role="button">Semua</a>
            <a class="btn menu_btn" href="#" role="button">Terbaru</a>
            <a class="btn menu_btn" href="#" role="button">Terlaris</a>
            <a class="btn menu_btn" href="#" role="button">Termurah</a>
            <a class="btn menu_btn" href="#" role="button">Termahal</a>
            <a class="btn menu_btn" href="#" role="button">Promo</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/lemarireal.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Micke</h5>
                        <p class="card-text">Rp.555.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/sofa.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Lisabo</h5>
                        <p class="card-text">Rp.399.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/lemarireal.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Micke</h5>
                        <p class="card-text">Rp.555.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4"> 
                <div class="card" id="product">
                    <div class="top_product">
                        <img src="{{asset('../img/sofa.png')}}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Lisabo</h5>
                        <p class="card-text">Rp.399.000</p>
                        <div class="rating">
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star checked"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <a class="d-block fs-5 mt-3 text-end" href="#" role="button">Selengkapnya >></a>
    </div>

    <div class="container mt-5">
        <div class="grid-container">
                <div class="grid-item item1 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/artikel-kami-img.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">SAMPAI JUMPA DI TOKO</p>
                        <p>Sebelum berkunjung, lihat halaman Toko dan Pick-up Point SIVALI untuk mengetahui informasi seputar penawaran, event dan lainnya.</p>
                    </div>
                </div>
                <div class="grid-item item2 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1">Barang dengan kualitas Terbaik</p>
                    </div>
                </div>
                <div class="grid-item item3 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1">Temukan <br> barang - barang lokal buatan <br> Kota Jepara</p>
                    </div>
                </div>
                <div class="grid-item item4 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">Semua Jenis Peralatan Dapur</p>
                    </div>
                </div>
                <div class="grid-item item5 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">Tipe Dapur Impian Anda Dirumah</p>
                        <p>Temukan semua barangnya hanya di Sivali Furniture</p>
                    </div>
                </div>
        </div>
    </div>
    
@endsection