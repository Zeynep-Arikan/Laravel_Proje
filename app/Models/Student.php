<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /*$table veritabanı tablosunun adını belirttik.*/
   protected $table= "students";

   /*
$fillable özelliği,kullanıcı tarafından gelen verilerle doldurulabilirler.*/
    protected $fillable=[
        'name',
        'lastname',
        'email',
        'phone',
        'address',
        'cgpa',
    ];
}
