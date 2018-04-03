<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    /**
     * Get the Program record associated with the Batch.
     */
    public function program()
    {
        return $this->belongsTo( Program::class );
    }
}
