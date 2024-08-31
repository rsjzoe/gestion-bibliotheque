<?php namespace App\Models;

use CodeIgniter\Model;

class BorrowingModel extends Model
{
    protected $table = 'borrowings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['book_id', 'client_name', 'borrowed_at', 'returned_at'];
}
