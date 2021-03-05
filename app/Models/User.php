<?php

namespace App\Models;

use Cache;
use App\Models\Main;
use App\Models\Role;
use App\Events\UserCreated;
use Kyslik\ColumnSortable\Sortable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles, Sortable, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
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

    public function rolesOfUser() {
        return $this->belongsTo(Role::class,'role_id');
        }

     public function isOnline(){
         return Cache::has('user-is-online-'. $this->id);
     }   

     

    public $sortable = ['id','name','email','role_id','created_at'];


    public function routeNotificationForSlack($notification)
    {
        return 'https://carteam-talk.slack.com/archives/C01PTNB32KC ';
    }



    protected $dispatchesEvents = [
        'created' => UserCreated::class,
        
    ];
}
