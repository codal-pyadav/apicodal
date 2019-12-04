<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    use Notifiable;

    protected $fillable = ['uname', 'uemail', 'upassword', 'ucontact'];

    protected $hidden = [
        'upassword',
    ];

}
