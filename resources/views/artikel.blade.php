@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/artikel.css')}}">

@section('content')
    
{{-- <div class="container d-flex align-items-end" id="artikel">
    <div class="artikel__content">
        <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
    </div>
</div>

<div class="container" id="sec_content">
    <p class="title fw-bold fs-3 mb-0">Tipe Dapur Impian Anda Di Rumah</p>
    <p class="desc_1 fs-5">Temukan semua barangnya hanya di Sivali Furniture    </p>
    <p class="desc_2">Lorem ipsum dolor sit amet consectetur. Sapien consectetur in quam suscipit ullamcorper ullamcorper. Viverra ac sodales fringilla facilisis at nulla eget ut. Nunc in posuere orci aenean mi tempus ut. Eget leo blandit erat urna varius urna. At hendrerit nunc fermentum accumsan mauris feugiat. Viverra nulla in enim vitae ac euismod vitae cras. Ipsum dictum tellus quis nulla et pharetra. Interdum praesent elit et sed ut est. Quis congue nisi elementum felis. Pellentesque urna in sed ultricies. Id eget consequat sed lectus id morbi.</p>
</div> --}}

@foreach ($ArtikelRandom->take(1) as $item)
<div class="container d-flex align-items-end" id="artikel">
    <div class="artikel__content">
        <img class="img-fluid" src="{{asset('img/'.$item->gambar_artikel)}}" alt="">
    </div>
</div>

<div class="container" id="sec_content">
    <p class="title fw-bold fs-3 mb-0">{{$item->judul_artikel}}</p>
    <p class="desc_1 fs-5">{{$item->subjudul_artikel}} </p>
    <p class="desc_2">{{$item->deskripsi_artikel}}</p>
</div>
@endforeach

<div class="container my-5" id="bottom__artikel">
    <div class="artikel__bottom">
        <h1 class="fw-bold fs-3 mb-4">ARTIKEL</h1>
        <div class="row" list__artikel>
            @foreach ($Artikel as $item)
                <div class="col-md-4 mt-3 la__image">
                    <a href="{{ route('detail_artikel', $item->id)}}">
                        <img class="artikel_img" src="{{asset('img/'.$item->gambar_artikel)}}" alt="">
                    {{-- <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt=""> --}}
                    <div class="overlay">
                        <p class="mb-1 fw-bold text-start">{{$item->judul_artikel}}</p>
                        <a href=""selengkapnya class="d-flex align-items-center gap-2 text-decoration-none text-white">
                            <i class="fa-solid fa-circle-chevron-right" style="color: #ffffff;"></i>
                            <p class="mb-0">Selengkapnya</p>
                        </a>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection