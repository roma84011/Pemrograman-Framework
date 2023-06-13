# Tujuan Pembelajaran 
1.	Mampu memahami tentang framework php
2.	Mampu mengimplementasikan perintah pada framework php
3.	Mahasiswa dapat Menggunakan framework php

# Alat dan Bahan yang digunakan
1.	Text Editor
2.	Codeignite 
3.	Gitbash 
4.	Composer
5.	Laptop/PC
6.	MS. Word

# Hasil dan pembahasan 
1.	Membuat database baru dengan nama db_film.

  	![P1](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/abc7356d-f8ff-48d0-9e09-ab35a706d51a)
2.	membuat tabel baru dengan nama film dan colom sesuai dengan kebutuhan 

  	 ![P2](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/d0af9cac-bd21-4e46-af19-239c634563f5)
3.	menambahkan data pada tabel film 

  	 ![P3](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/a1b64556-2f02-40f0-b8e4-2ec39bca9517)

4.	mengubungkan codeigniter dengan database dengan mengedit file .env 
 
     ![P4](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/0fa93da7-a3bd-4e03-ae43-36d444d92731)
  	
5.	membuat file pada controller/film.php 
    ```bash
    <?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\FilmModel;
    
    class Film extends BaseController
    {
        //step 2
        protected $Film;
    
        public function __construct()
        {
            //step 4 memanggil 
            $this -> Film = new FilmModel();
        }
    
        //fungsi yang akan diakses pada url nanti
        public function all(){
        $data['semuaFilm'] = $this -> Film -> getAllData();
        return view("Film/semuaFilm", $data);
        }  
    }
    ?>
    ```
pada bagian function all, digunakan untuk pengaksesan pada url nanti dan untuk bagian getAllData digunakan untuk memangil function pada bagian model

6.	membuat file pada Model/FilmModel.php
    ```bash
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
    
        //fungsi untuk menampilkan seluruh data
        public function getAllData(){
            //return mengembalikan data
            return $this -> FindAll();
        }
    }
    ```

7.	membuat file pada view/semuaFilm.php yang digunakna untuk menampilkan hasil yang telah di kerjakan
    ```bash
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>data film</title>
    </head>
    <body>
        <h1>Data Film</h1>
        <table border ="1" cellspacing="2" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Cover</th>
                <th>Nama Film</th>
                <th>Genre</th>
                <th>Durasi</th>
    
            </tr>
            <?php $i = 1 ;?>
            <?php foreach($semuaFilm as $film): ?>
                <tr>
                    <td><?= $i++;?></td>
                    <td >
                        <img style="width: 50px;" src="/assets/cover/<?= $film ['cover']?>" alt="">
                    </td>
                    <td><?php echo $film['nama_film']?></td>
                    <td><?= $film['genre']?></td>
                    <td><?= $film['duration']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
    </html>
    ```

8.	menampilkan data yang telah di buat dengan peritah localhost:8080/film/all

   ![P5](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/ef39b8c6-8a92-46f5-8e6f-2246ed3bf4ac)

9.	menampilkan data dengan kondisi sesuai dengan id, dengan menggunakan find ($id)
tambahan fungsi pada FilmModel.php

  	 ![P6](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/6485f3bc-d98b-437b-b75c-804d18d3f1c4)

selanjutnya panggil pada controller/Film.php
    
     ![P7](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/b795d993-7cbe-478a-b2e0-ad07bc1de406)
      
      <img src="gambar-git/p7.png">
hasilnya :
 

10.	menampilkan data dengan kondisi sesuai dengan judul, dengan menggunakan where
tambahan fungsi pada FilmModel.php
 
selanjutnya panggil pada controller/Film.php
 
hasilnya :
 

11.	menampilkan data dengan fungsi orderby, dengan menggunakan orderby pada bagian ini data created_at akan di urutkan.
tambahan fungsi pada FilmModel.php
 
selanjutnya panggil pada controller/Film.php
 
hasilnya :
 
12.	menampilkan data dengan fungsi limit, dengan menggunakan limit untuk menampilkan data sesuai dengan limit yang telah di tentukan 
tambahan fungsi pada FilmModel.php
 
selanjutnya panggil pada controller/Film.php
 
hasilnya :
 
13.	menampilkan data dengan fungsi builder, dengan menggunakan builder maka yang di tampilkan hanya kolom tertentu pada tabel
tambahan fungsi pada FilmModel.php
 
selanjutnya panggil pada controller/Film.php
 
hasilnya :
 

# Tugas

1.	Menambhalan tabel pada database db_film dengan nama tabel genre
 
2.	Menampilkan data genre d ihalaman html, jika untuk di menampilkan data film kita film/all untuk menampilkan data genre aksesnya adalah genre/all
•	membuat file controller/genre
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

    $data['semuaGenre'] = $this -> Genre -> getAllData();
    return view("Genre/semuaGenre", $data);
    }            

}


•	membuat file model/GenreModel.php
<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    //menyambungkan ke dalam tabel film secara langsung
    protected $table ='genre';
    //apabila akan insert di database makan di secara langsung akan memberikan id dengan menlanjutkan id yang sudah ada
    protected $primaryKey ='id';
    //ketika insert menggunakan fungsi ci diakan melakukan autoincremen pada data yg kita tambahkan
    protected $useAutoIncrement = true;
    //mengisinkan apakah data dapat di update, delete dan insert pada kolom
    protected $allowField =[];

    //fungsi untuk menampilkan seluruh data
    public function getAllData(){
        //return mengembalikan data
        return $this -> FindAll();
    }
}

•	membuat file view/semuagenre.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data film</title>
</head>
<body>
    <h1>Data Genre</h1>
    <table border ="1" cellspacing="2" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
           

        </tr>
        <?php $i = 1 ;?>
        <?php foreach($semuaGenre as $Genre): ?>
            <tr>
                <td><?= $i++;?></td>
                <td><?php echo $Genre['nama_genre']?></td>
                <td><?php echo $Genre['created_at']?></td>
                <td><?= $Genre['updated_at']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>





Hasilnya :
 
3.	ubah tabel film pada kolom genre menjadi id_genre,, isi datanya sesuai dengan data pada tabel genre
 
4.	saat menjalankan film/all pastina tidak ada error, artinya codingya harus disesuaikan karena menganti genre manjadi id genre.
 
link github : 
