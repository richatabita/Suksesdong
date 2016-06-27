<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description'];
    public $timestamps = true;
}
