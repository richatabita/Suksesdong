<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    protected $primarykey = 'id_faq';
    protected $fillable = ['judul','content','gambar'];
    public $timestamps = false;
}
