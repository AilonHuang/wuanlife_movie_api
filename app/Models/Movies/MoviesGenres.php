<?php

namespace App\Models\Movies;

use Illuminate\Database\Eloquent\Model;

class MoviesGenres extends Model
{
    public $timestamps = false;
    protected $table = 'movies_genres';

    public function detail(){
        return $this->hasOne('App\Models\Movies\MoviesGenresDetails','genres_id','genres_id');
    }
}
