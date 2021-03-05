<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\User;
use App\Models\Main;
use Auth;

class Role extends Model
{
    use HasFactory;

    public  static function getRoleName(){

        if(Auth::guest()) {

           $user =  \DB::table('roles')->pluck('name','id')->toArray();
        }
        else {
            if(Auth::user()->role_id == 1) {
                $user = \DB::table('roles')->pluck('name','id')->toArray();
            }
            elseif(Auth::user()->role_id == 2) {
                $user = \DB::table('roles')->whereNotIn('id',['1'])->pluck('name','id')->toArray();
            }
            elseif(Auth::user()->role_id == 3) {
                $user = \DB::table('roles')->whereIn('id',['3'])->pluck('name','id')->toArray();
            }

        }
        
        return  $user; 
        
    } 
}
