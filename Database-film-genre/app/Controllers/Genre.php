<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;
    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Genre = new GenreModel();
    }

    public function index()
    {
        //step 4
        $data['data_Genre'] = $this -> Genre -> getGenre();
        return view("genre/index", $data);
    }

    //fungsi yang akan diakses pada url nanti
    public function all(){
        //memanggil fungsi get all data pada model
        //dd($this->Film -> getAllData()); 
    $data['semuaGenre'] = $this -> Genre -> getAllData();
    return view("Genre/semuaGenre", $data);
    }            

}
