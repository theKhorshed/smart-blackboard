<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * Get the Semester record associated with the Section.
     */
    public function semester()
    {
        return $this->belongsTo( Semester::class );
    }

    /**
     * Get the Batch record associated with the Section.
     */
    public function batch()
    {
        return $this->belongsTo( Batch::class );
    }
}
