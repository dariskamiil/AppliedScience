<?php

namespace App;

use App\user;
use Illuminate\Database\Eloquent\Model;


class Account extends Model
{
    /**
     * Variable yang dapat menentukan primaryKey.
     */
    protected $primaryKey = 'id';
    /**
     * Variable yang menentukan nama table.
     */
    protected $table = 'ms_user';
    /**
     * Variable yang mendaftarkan atribut yang bisa di isi.
     * @var array
     */
    protected $fillable = ['approved', 'role', 'name', 'email' , 'username','department_id','updated_by',];    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(user::class, 'updated_by');
    }
}   