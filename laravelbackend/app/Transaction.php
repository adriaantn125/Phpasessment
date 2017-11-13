<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //Table Name
    protected $table = 'transactions';
    //Primary Key
    public $primaryKey = 'id';
    // TimeStamos
    public $timestamps = true;

    public function User()
    {
        return $this.belongsTo('App\User');
    }
}
