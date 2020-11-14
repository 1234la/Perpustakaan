@extends('layouts.app')
@section('content')

<div class=row>
    <div class="col-md-10">
        <div class="card" style="margin-left:50px">
            <div class="card-header">
              Data Buku Perpustakaan
            </div>
            <div>
            <a href="{{route('buku.create')}}" class="btn-sm btn-danger">Tambah Buku</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                    <th>NO</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th> 
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Letak</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                    </tr>
        
                    <?php $index=0?>
                    @foreach ($bukus as $index =>$book)
                        <tr>
                            <td>{{$index+1}} </td>
                            <td>{{($book->judul)}}</td>
                            <td>{{($book->pengarang)}}</td>
                            <td>{{($book->penerbit)}}</td>
                            <td>{{($book->tahun)}}</td>
                            <td>{{($book->isbn)}}</td>
                            <td>{{($book->letak)}}</td>
                            <td>{{($book->jumlah)}}</td>
                            <td>
                                <a href="/buku/edit/{{$book->id}}" class="btn btn-xs btn-primary" style="margin:5px">Edit</a> 
                               <!--hapus belum selesai-->
                               <a href="/buku/hapus/{{$book->id}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                    
            </div>
          </div>
    </div>
</div>
@endsection