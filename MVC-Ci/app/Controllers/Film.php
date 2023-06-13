<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $Film;
    //step 3 membuat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Film = new FilmModel();
    }

    public function index()
    {
        //step 4
        $data['data_film'] = $this -> Film -> getFilm();
        return view("film/index", $data);
    }
}
