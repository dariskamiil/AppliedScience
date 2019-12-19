<?php

namespace App;

use App\ms_user;
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
    protected $fillable = ['department_name','is_active'];
    /**
     * Variable yang menentukan nama relasi table.
     */
    public function user()
    {
        return $this->hasMany(ms_user::class, 'id');
    }
}