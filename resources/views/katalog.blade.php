@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/katalog.css')}}">

@section('content')
    <div class="container" id="top_content">
        <div id="top_cf">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tc_content mt-5">
                            <h1 class="text-white fw-light"><span class="fw-bold">SIVALI</span> #1 WEBSITE FURNITURE TERPERCAYA</h1>
                            <p class="text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, iure.</p>
                        </div>
                        <a href="#next_scroll" class="scrolling">
                            <p class="text-white fs-4 mb-1">LIHAT <b>LEBIH</b></p>
                            <div class="vl"></div>
                            <i class="fa-solid fa-circle-chevron-down fa-lg mt-3" style="color: #000;"></i>
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end img__lampu"><img src="{{asset('../img/figma-lampu-1.png')}}" alt=""></div>
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{asset('../img/figma-lemari-1.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center" id="next_scroll">
        <div class="row d-flex">
            <div class="col-md-6 content_barang d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 barang__kiri"><img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt=""></div>
                    <div class="col-md-7">
                        <div class="judul__barang">
                            <h3 class="fw-light">KURSI <span class="fw-bold">NYAMAN</span></h3>
                            <hr class="hr_judul bg-dark border-2 border-top border-dark">
                        </div>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class=" fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2 justify-content-end">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content_barang d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7">
                        <div class="judul__barang">
                            <h3 class="fw-light">MEJA <span class="fw-bold">FLEXIBEL</span></h3>
                            <hr class="hr_judul bg-dark border-2 border-top border-dark">
                        </div>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class=" fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2 justify-content-start">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                    <div class="col-md-5 barang__kanan"><img src="{{asset('../img/meja-flexibel.png')}}" width="100%" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-2 col-12 text-center text-md-left">
                <h3 class="fw-bold mb-0">FURNITURES</h3>
            </div>
            <div class="col-md-10 menu d-flex gap-3 flex-wrap">
                <a class="btn menu_btn" href="#" role="button">Semua</a>
                <a class="btn menu_btn" href="#" role="button">Meja</a>
                <a class="btn menu_btn" href="#" role="button">Kursi</a>
                <a class="btn menu_btn" href="#" role="button">Lampu</a>
                <a class="btn menu_btn" href="#" role="button">Sofa</a>
                <a class="btn menu_btn" href="#" role="button">Kasur</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12 d-flex justify-content-center align-items-center">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm d-flex gap-5 mb-0">
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div> --}}
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <ul class="pagination modal-1 gap-3">
                    {{-- <li><a href="#" class="prev">&laquo</a></li> --}}
                    <li><a href="#" class="active">1</a></li>
                    <li> <a href="#">2</a></li>
                    <li> <a href="#">3</a></li>
                    {{-- <li> <a href="#">4</a></li>
                    <li> <a href="#">5</a></li>
                    <li> <a href="#">6</a></li>
                    <li> <a href="#">7</a></li>
                    <li> <a href="#">8</a></li>
                    <li> <a href="#">9</a></li> --}}
                    {{-- <li><a href="#" class="next">&raquo;</a></li> --}}
                </ul>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="col-md-12">
            <div id="slider" style="width: 100vw;">
                <a class="control_next">></a>
                <a class="control_prev"><</a>
                <ul>
                  <li>
                    <div class="row">
                        <div class="col-md-6">
                            <h1><span>Gaya Baru</span>Sofa Modern</h1>
                            <a href=""><span>Lihat</span> Selengkapnya</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt="">
                        </div>
                    </div>
                  </li>
                  <li style="background: #aaa;">SLIDE 2</li>
                  <li>SLIDE 3</li>
                  <li style="background: #aaa;">SLIDE 4</li>
                </ul>  
              </div>
              
              <div class="slider_option">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Autoplay Slider</label>
              </div> 
        </div>
    </div> --}}


    <div class="container mt-5">
        <div class="row mb-5">
            <div class="status col d-flex gap-3 align-items-center fs-5">
                <a href="" class="text-black">LAKU <span class="fw-bold">TERJUAL</span></a>
                <div class="hl"></div>
                <a href="" class="fw-bold text-black">READY STOK</a>
            </div>
        </div>
        <div class="row mt-5 px-4 d-flex justify-content-between">
            <div class="col-md-4 mt-3">
                <div class="row">
                    <div class="col-md-6 py-3 px-2 d-flex align-items-center justify-content-center" style="background-color: rgb(241, 241, 241)">
                        <img src="{{asset('../img/lemari-coklat.png')}}" width="70%" alt="">
                    </div>
                    <div class="col-md-6 fs-5 pl-5">
                        <p class="mb-0 ">MICKE</p>
                        <span class="fw-bold" style="color: #134B6E">RP.555.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

        $('#checkbox').change(function(){
        setInterval(function () {
            moveRight();
        }, 3000);
        });

        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;
        
        $('#slider').css({ width: slideWidth, height: slideHeight });
        
        $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
        
        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: + slideWidth
            }, 200, function () {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: - slideWidth
            }, 200, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('a.control_prev').click(function () {
            moveLeft();
        });

        $('a.control_next').click(function () {
            moveRight();
        });

        });    

    </script>
@endsection