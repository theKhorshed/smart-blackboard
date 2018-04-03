<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * Get the Program record associated with the Course.
     */
    public function program()
    {
        return $this->hasOne( Program::class );
    }
}
