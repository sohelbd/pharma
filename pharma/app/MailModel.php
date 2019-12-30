<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailModel extends Model
{
    protected $table='mail';
    protected $primaryKey='id';
    const CREATED_AT='created_at';
    const UPDATED_AT='updated_at';
    protected $dateFormat='Y-m-d H:i:s';

    protected $fillable=[
     'name','email','subject','msg',
 ];
}
