<?php

namespace App\Models;

use App\Models\Role;
use App\Helpers\CalcPercentages;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'admin_name',
        'email',
        'password',
        'role_id',
        'dev_access',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
   

    public function calcUsersIncrease()
    {
     
        return CalcPercentages::calcIncrease($this->getUsersLastMonth(),$this->getCurrentUsers());
    }

  
    public function getCurrentUsers(): int
    {
       return CalcPercentages::getCurrentMonth($this) -1; 
    }

    public function getUsersLastMonth(): int
    {
        return CalcPercentages::getLastMonth($this);
    }
    public function calcUsersSinceWeek() : int
    {
        return CalcPercentages::calcIncrease(CalcPercentages::getSinceLastWeek($this), CalcPercentages::getCurrentWeak($this));
    }
    
}
