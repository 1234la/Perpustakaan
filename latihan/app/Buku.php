<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $tabel= 'bukus';
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'tahun',
        'isbn',
        'letak',
        'jumlah'
    ];
    

}
