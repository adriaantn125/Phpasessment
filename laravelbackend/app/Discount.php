<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //Table Name
    protected $table = 'discounts';
    //Primary Key
    public $primaryKey = 'id';
    // TimeStamos
    public $timestamps = true;
}
