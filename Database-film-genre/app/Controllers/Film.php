<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $Film;
    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
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

    //fungsi yang akan diakses pada url nanti
    public function all(){
        //memanggil fungsi get all data pada model
        //dd($this->Film -> getAllData()); 
    $data['semuaFilm'] = $this -> Film -> getAllData();
    return view("Film/semuaFilm", $data);
    }            

    //memanggil fungsi getdatabyid yang akan diakses pada url nanti
    public function find_byid(){
        //memanggil fungsi getDataByID pada model
         dd($this->Film -> getDataByID(1));   
    }

    //memanggil fungsi getdataby yang akan diakses pada url nanti
    public function find_bywhere(){
        //memanggil fungsi getDataBy pada model
         dd($this->Film -> getDataBy('mumun pocong'));   
    }

    //memanggil fungsi getorderby yang akan diakses pada url nanti
    public function find_ordeby(){
        //memanggil fungsi getOrderBy pada model
         dd($this->Film -> getOrderBy());   
    }

    //memanggil fungsi limit yang akan diakses pada url nanti
    public function find_limit(){
        //memanggil fungsi getLimit data pada model
         dd($this->Film -> getLimit());   
    }

    //memanggil fungsi seuai dengan kolom yang akan diakses pada url nanti
    public function find_kolom(){
        //memanggil fungsi getFilmAll  pada model
         dd($this->Film -> getFilmAll());   
    }




}
