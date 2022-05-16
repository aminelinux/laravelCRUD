<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Table Name 
    //protected $table = 'posts';
    //PrimaryKey 
    //public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true; 
    //Add a title,body to the fillable array in your model Post, to allow saving through creating and massive methods
    protected $fillable = ['title','body'];

}
  