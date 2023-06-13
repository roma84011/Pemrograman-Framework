<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GuruModel;

class Guru extends BaseController
{
    //step 2
    protected $Guru;
    //step 3 membuat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Guru = new GuruModel();
    }

    public function index()
    {
        //step 4
        $data['data_guru'] = $this -> Guru -> getGuru();
        return view("guru/index", $data);
    }
}
