<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Spatie\Permission\Traits\HasRoles;

class CarCategory extends Model
{
    use HasFactory,Sortable;

    protected $table = "carcategory";
     protected $fillable = [

            'regno',
            'carmodel',
            'price'

     ];


     public function setRegnoAttribute($value)
    {
        $this->attributes['regno'] = 'CK'.($value);  //mutator
    }

        public function getRegnoAttribute(){
            return $this->attributes['regno'];     //accessor
    }

     public $sortable = ['id','regno','carmodel','price','created_at','updated_at'];


}
