<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // define o nome da tabela caso seja diferente da conevção do laravel que é o plural do nome do model
    // protected $table = 'lojas';

    public function user(){
        $this->belongsTo(User::class);
    }

}
