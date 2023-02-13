<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $autoincrement = true;
    protected $allowedFields = ['id', 'judul', 'rilis', 'deskripsi'];
}
