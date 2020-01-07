<?php

namespace App;

use App\user;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Variable yang dapat menentukan primaryKey.
     */
    protected $primaryKey = 'article_category_id';
    /**
     * Variable yang menentukan nama table.
     */
    protected $table = 'ms_article_category';
    /**
     * Variable yang mendaftarkan atribut yang bisa di isi.
     * @var array
     */
    protected $fillable = ['article_category_name', 'created_by', 'updated_by'];
    /**
     * Variable yang menentukan nama relasi table.
     */
    
    public function article()
    {
     return $this->hasMany(Article::class, 'article_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(user::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(user::class, 'updated_by');
    }
}
