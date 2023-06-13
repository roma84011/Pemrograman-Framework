<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    public function getFilm(){

        $data=[
            [
                "nama_film" => "sewu dino",
                "genre" => "horor" ,
                "duration"=>"1 jam 43 menit"
            ],
            [
                "nama_film" => "Fast and forius",
                "genre" => "action" ,
                "duration"=>"2 jam 9 menit"
            ],
            [
                "nama_film" => "teletabis the movie",
                "genre" => "scient fiction" ,
                "duration"=>"1 jam 9 menit"
            ],
            [
                "nama_film" => "ayah mengapa aku berbeda",
                "genre" => "Drama" ,
                "duration"=>"9 jam 9 menit"
            ],
            [
                "nama_film" => "annabelle",
                "genre" => "Horor" ,
                "duration"=>"2 jam 10 menit"
            ],
            [
                "nama_film" => "coldplay",
                "genre" => "Music" ,
                "duration"=>"5 jam 9 menit"
            ]
        ];

        return $data;
    }
}
