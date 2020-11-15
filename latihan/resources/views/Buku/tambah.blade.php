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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action="{{route('buku.store')}}" method="POST">
                {{ csrf_field()}}
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Buku">
                    </div>
                    <div class="form-group">
                      <label for="pengarang">Pengarang</label>
                      <input type="text" name="pengarang" class="form-control" id="pengarang" placeholeder="Pengarang Buku">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit Buku">
                      </div>
                      <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun Terbit">
                      </div>
                      <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" name="isbn" class="form-control" id="isbn" placeholder="ISBN Buku">
                      </div>
                      <div class="form-group">
                        <label for="">Letak</label>
                       <select name="letak" id="" class="form-control">
                           <option value=" ">Pilih</option>
                           <option value="rak1">Rak 1</option>
                           <option value="rak2">Rak 2</option>
                           <option value="rak3">Rak 3</option>
                           <option value="rak4">Rak 4</option>
                           <option value="rak5">Rak 5</option>
                       </select>
                      </div>
                      <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Buku">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/home" class="btn btn-xs btn-danger"
                            onclick="return confirm('yakin?');">Cancel</a>
                  </form>
            </div>
          </div>
    </div>
</div>
</div>
@endsection