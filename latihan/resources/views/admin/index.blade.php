@extends('layouts.app')
@section('content')

<div class=row>
    <div class="col-md-10">
        <div class="card" style="margin-left:50px">
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
                            <div class="col" style="background-color:yellow">
                                <a href="{{url('/edit')}" class="btn btn-xs btn-primary" style="margin:5px">Edit</a> 
                            </div>
                            <div class="col" style="background-color:green">
                                <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                    
            </div>
          </div>
    </div>
</div>
@endsection