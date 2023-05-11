@extends('backEnd.index')
@section('title', 'Edit Barang')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$barang->gambar_barang)}}" alt="" width="100">
        <form action="{{ route('b_update', $barang->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Pilih Gambar Barang</label>
                <input class="form-control" type="file" id="formFile" name="gambar_barang" value="{{$barang->gambar_barang}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Pilih Kategori :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kategori" value="{{$barang->id_kategori}}">
                  @foreach ($kategoriBarang as $item)
                  <option value="{{ $item->id}}">{{ $item->kategori_barang}}</option>
                  @endforeach
                </select>
              </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Judul Barang :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Judul Barang..." name="judul_barang" value="{{$barang->judul_barang}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Deskripsi Barang :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Deskripsi Barang..." name="deskripsi" value="{{$barang->deskripsi}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Harga Barang :</label>
                <input type="number" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Harga Barang..." name="harga" value="{{$barang->harga}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Rating Barang (Max:5) :</label>
                <input type="number" class="form-control" id="exampleInputUsername1" name="rate" value="{{$barang->rate}}">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputUsername1">Password :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Password..." name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Nama Petugas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Nama Petugas..." name="nama_petugas">
            </div> --}}
            <div class="modal-footer">
                <a href="{{ route('b_index') }}" class="btn btn-outline-warning btn-icon-text">
                    Cancel
                </a>
                <button type="submit" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection