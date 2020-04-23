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
    /**
     * Variable yang menentukan relasi table.
     */
    public function createdBy()
    {
        return $this->belongsTo(user::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(user::class, 'updated_by');
    }
    public function author()
    {
        return $this->belongsTo(user::class, 'author');
    }
}
