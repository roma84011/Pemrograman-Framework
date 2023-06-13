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

    ![P7](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/74f35f91-a262-4133-9430-8d2afe8c0b93)

    hasilnya :

     ![P8](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/718e5870-5253-4258-ba02-8f2fc3b9e93e)


10.	menampilkan data dengan kondisi sesuai dengan judul, dengan menggunakan where
tambahan fungsi pada FilmModel.php

     ![P9](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/b5a293dd-92e0-46fd-aaac-69173ac86de0)

    selanjutnya panggil pada controller/Film.php
  
     ![P10](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/0a51a83f-8204-4076-a22d-d1de8c41a3c3)

    hasilnya :

     ![P11](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/95c57954-6177-4f25-8b04-ecc68606a1f7)
 
11.	menampilkan data dengan fungsi orderby, dengan menggunakan orderby pada bagian ini data created_at akan di urutkan.
tambahan fungsi pada FilmModel.php

     ![P12](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/417d2844-f21e-476e-8b78-701d672a7688)

    selanjutnya panggil pada controller/Film.php

     ![P13](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/00d3a7a2-6020-40f9-915d-45a2caf59289)

    hasilnya :

     ![P14](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/41c5ad4e-f0bb-413f-8524-6832545007bf)

12.	menampilkan data dengan fungsi limit, dengan menggunakan limit untuk menampilkan data sesuai dengan limit yang telah di tentukan 
tambahan fungsi pada FilmModel.php
     
      ![P15](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/1d4767d9-dac2-4348-a876-73febf2e232e)

      selanjutnya panggil pada controller/Film.php

       ![P16](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/e9401cf0-cd26-4757-b9c3-675aa17cdaaa)

      hasilnya :

      ![P17](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/d43620bb-0053-4d5f-b98a-f33090f50e47)

 
14.	menampilkan data dengan fungsi builder, dengan menggunakan builder maka yang di tampilkan hanya kolom tertentu pada tabel
tambahan fungsi pada FilmModel.php

       ![P18](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/49d0ba54-4287-41e5-8b17-d90504562dd6)

      selanjutnya panggil pada controller/Film.php

      ![P19](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/b7f958b5-61fd-4044-a792-5e3c6bf82aab)
 
      hasilnya :

      ![P20](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/7d80eeca-bd03-4cc2-b6a1-3a13fbd78033)

 

# Tugas

1.	Menambahkan tabel pada database db_film dengan nama tabel genre

     ![T1](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/2d14de4b-2ca4-4c3e-9dac-7adf6f9d3b68)

2.	Menampilkan data genre d ihalaman html, jika untuk di menampilkan data film kita film/all untuk menampilkan data genre aksesnya adalah genre/all
    •	membuat file controller/genre
      ```bash
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
      ```

    •	membuat file model/GenreModel.php
      ```bash
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
      ```

    •	membuat file view/semuagenre.php
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
    ```
    
    Hasilnya :
  	
  	![T2](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/22dade76-0651-4c1b-bf64-98d5b7ac0742)

 
4.	ubah tabel film pada kolom genre menjadi id_genre,, isi datanya sesuai dengan data pada tabel genre

     ![T3](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/0d5919a0-9a0c-4455-bd6a-06d26896a7a1)

5.	saat menjalankan film/all pastikan tidak ada error, artinya codingya harus disesuaikan karena menganti genre manjadi id genre.

     ![T4](https://github.com/roma84011/Pemrograman-Framework/assets/70304033/a49b6b61-209a-4ad6-95e9-871799e13f95)


