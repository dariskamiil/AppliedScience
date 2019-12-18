<?php

namespace App;

use App\ms_user;
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
    protected $fillable = ['approved', 'role', 'name'];    
}   