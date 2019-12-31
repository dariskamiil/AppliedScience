<?php

namespace App;

use App\user;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Variable yang dapat menentukan primaryKey.
     */
    protected $primaryKey = 'department_id';
    /**
     * Variable yang menentukan nama table.
     */
    protected $table = 'ms_department';
    /**
     * Variable yang mendaftarkan atribut yang bisa di isi.
     * @var array
     */
    protected $fillable = ['department_name','is_active','updated_by','created_by'];
    /**
     * Relation to User Model;
     * @var array
     */
    
    public function createdBy()
    {
        return $this->belongsTo(user::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(user::class, 'updated_by');
    }
    public function user()
    {
        return $this->hasMany(user::class);
    }
    public function account()
    {
        return $this->hasMany(account::class);
    }
}