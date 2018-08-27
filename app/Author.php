<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];



    /**
     * Get the books that belong to the author.
     */
    public function books()
    {
        return $this->hasMany('App\Book')->count();
    }
}
