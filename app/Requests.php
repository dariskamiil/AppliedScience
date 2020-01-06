<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $primaryKey = 'request_id';
    /**
     * Variable yang menentukan nama table.
     */
    protected $table = 'tr_request';
    /**
     * Variable yang mendaftarkan atribut yang bisa di isi.
     * @var array
     */
    protected $fillable = ['case_study', 'article_type', 'article_category_id','author','is_active','created_by','updated_by'];   
}
