@extends('layouts.app')
@section('content')

<div class="container">
    <div class=row>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Input Data Buku
                </div>
                <div class="card-body">
                    <form action="/buku/update" method="POST">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <input class="form-control @error('id') is-invalid @enderror" type="hidden" name="id" id=id" value="{{$bukus->id }}">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                                id="judul" value="{{$bukus->judul}}"  placeholder="Judul Buku">
                            @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang"
                                class="form-control @error('judul') is-invalid @enderror" id="pengarang"
                                value="{{$bukus->pengarang}}" placeholder="{{$bukus->pengarang}}">
                            @error('pengarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror"
                                id="penerbit" value="{{$bukus->penerbit}}" placeholder="Penerbit Buku">
                            @error('penerbit')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Terbit</label>
                            <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror"
                                id="tahun" value="{{$bukus->tahun}}" placeholder="Tahun Terbit">
                            @error('tahun')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror"
                                id="isbn" value="{{$bukus->isbn}}" placeholder="ISBN Buku">
                            @error('isbn')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <label for="">Letak</label>
                            <select name="letak" id="" class="form-control @error('letak') is-invalid @enderror">
                                <option value=" {{$bukus->letak}} ">Pilih</option>
                                <option value="rak1">Rak 1</option>
                                <option value="rak2">Rak 2</option>
                                <option value="rak3">Rak 3</option>
                                <option value="rak4">Rak 4</option>
                                <option value="rak5">Rak 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                                id="jumlah" value="{{$bukus->jumlah}}" placeholder="Jumlah Buku">
                            @error('jumlah')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror        
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        / <!--cancel belum selesai-->
                        <a href="#" class="btn btn-xs btn-danger"
                            onclick="return confirm('yakin?','history.back(-1)');">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
