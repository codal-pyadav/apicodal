<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'empid';
    protected $fillable = ['empname', 'empaddress', 'empcontact'];
}
