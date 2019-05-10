<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
   	protected $connection = 'backend';
    protected $table = 'attachment';


    protected $casts = [
        'parent_id' => 'string',
        'id' => 'string'
    ];
}
