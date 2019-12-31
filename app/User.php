<?php
namespace App;

use App\Department;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ms_user';
    protected $primaryKey = 'id';
    protected $fillable = [ 'name', 'email', 'password','username','role', 'department_id', ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function departs()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function department()
    {
        return $this->hasMany(Department::class);
    }
    public function account()
    {
        return $this->hasMany(account::class);
    }
    public function category()
    {
        return $this->hasMany(category::class);
    }
}