@extends('layouts.app')
@section('content')

<div class=row>
    <div class="col-md-10 ">
        <div class="tombol" style="margin-bottom:10px ;margin-left:160px;margin-right:-60px">
             <a href="{{route('buku.create')}}" class="btn-sm btn-danger" style="text-decoration:none" >Tambah Buku</a>
              <a href="/registeradmin" class="btn-sm btn-primary" style="padding:5px; margin-left:5px;margin-right:-60px;text-decoration:none">Tambah Admin/User</a>
        </div>
        <div class="card" style="margin-left:160px;margin-right:-60px">
            <div class="card-header">
              Data Buku Perpustakaan
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