@extends('layouts.app')
@section('content')

<div class="container">
<div class=row>
    <div class="col-md-10">
        <div class="card">
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
                        </tr>
                        @endforeach
                </table>
            </div>
          </div>
    </div>
</div>
</div>
@endsection

