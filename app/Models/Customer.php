<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps=false;
    protected $table = "customers";
    protected $fillable=['name','email','contact','country','province','address','password','confirm_password','gender'];

    public function setNameAttribute($value){
    $this->attributes['name']=  ucwords($value);
    }
    public function setCountryAttribute($value){
    $this->attributes['country']=  ucwords($value);
    }
    public function setAddressAttribute($value){
    $this->attributes['address']=  ucwords($value);
    }
}
