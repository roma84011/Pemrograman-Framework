<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    //menyambungkan ke dalam tabel film secara langsung
    protected $table ='film';
    //apabila akan insert di database makan di secara langsung akan memberikan id dengan menlanjutkan id yang sudah ada
    protected $primaryKey ='id';
    //ketika insert menggunakan fungsi ci diakan melakukan autoincremen pada data yg kita tambahkan
    protected $useAutoIncrement = true;
    //mengisinkan apakah data dapat di update, delete dan insert pada kolom
    protected $allowField =[];

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

    //fungsi untuk menampilkan seluruh data
    public function getAllData(){
        //return mengembalikan data
        return $this -> FindAll();
    }

    //fungsi utnuk mencari data sesuai dengan id
    public function getDataById($id){
        return $this -> find ($id);
    }

    //fungsi utnuk mencari data sesuai dengan where/kondisi yang di cari
    public function getDataBy($data){
        return $this -> where ('nama_film', $data)-> findAll();
    }

    //fungsi untuk mencari data sesuai dengan order by dan akan di ururtkan
    public function getOrderBy(){
        return $this -> orderBy ('created_at', 'desc')-> findAll();
    }

    //fungsi menambil data sebanyak limit yang dimasukkan 
    public function getLimit(){
        return $this -> limit (5) -> get() -> getResultArray();
    }

    //fungsi yang di gunakan untuk menampilakan kolom tertentu pada tabel
    public function getFilmAll(){
        $builder = $this->db->table('film');
        $builder ->select('film.nama_film');
        $query = $builder -> get ();
        return $query -> getResult();
    }





}
