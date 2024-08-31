<?php namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author_id', 'published_date', 'isborrow'];
}
