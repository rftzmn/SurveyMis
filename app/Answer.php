<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	 protected $table="answers";

     protected $fillable = [
        'qsn_id', 'answer','answer_id'
    ];
}
