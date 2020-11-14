@extends('layouts.app')
@section('content')

<div class="container">
<div class=row>
    <div class="col-md-10">
<<<<<<< HEAD
        <div>
            <a href="{{route('buku.create')}}" class="btn-sm btn-danger">Tambah Buku</a>
        </div>
        <div class="card">
=======
        <div class="card" style="margin-left:50px">
>>>>>>> main
            <div class="card-header">
              Data Buku Perpustakaan
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                    <th>Judul Buku</th>
                    <th>Pengarang</th> 
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Letak</th>
                    <th>Jumlah</th>
                    </tr>
        
                    @foreach ($bukus as $book)
                        <tr>
                            <td>{{($book->judul)}}</td>
                            <td>{{($book->pengarang)}}</td>
                            <td>{{($book->penerbit)}}</td>
                            <td>{{($book->tahun)}}</td>
                            <td>{{($book->isbn)}}</td>
                            <td>{{($book->letak)}}</td>
                            <td>{{($book->jumlah)}}</td>
                        </tr>
                    @endforeach
                </table>
                    
            </div>
          </div>
    </div>
</div>
</div>
@endsection