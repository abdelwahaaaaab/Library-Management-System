<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrow extends Model
{
    use HasFactory;
    protected $fillable = ['User_id','borrow_book'];
    public function Register()
    {
        return $this->belongsTo('app\Models\Register', 'User_id');
    }
    public function AddBook()
    {
        return $this->belongsTo('app\Models\AddBook', 'borrow_book');
    }
}
