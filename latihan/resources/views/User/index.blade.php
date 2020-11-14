@extends('layouts.app')

@section('content')
<div class=row>
    <div class="col-md-10">
        <div class="card">
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
        
                @foreach ($datas as $data)
                <tr>
                    <td>{{($data->judul)}}</td>
                    <td>{{($data->pengarang)}}</td>
                    <td>{{($data->penerbit)}}</td>
                    <td>{{($data->tahun)}}</td>
                    <td>{{($data->isbn)}}</td>
                    <td>{{($data->letak)}}</td>
                    <td>{{($data->jumlah)}}</td>
                </tr>
            </table>
@endsection