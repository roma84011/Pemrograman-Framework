<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    public function getGuru(){

        $data=[
            [
                "nip" => "19238",
                "nama_guru" => "Sri Agustin" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Komarudin",
                "tgl_lhr"=>"12 juni 1989",
                "agama"=>"Islam",
                "jenjang"=>"S1",
                "mapel"=>"Ilmu Pengetahuan Alam",
                "tgl_masuk"=>"07 September 2005"
            ],
            [
                "nip" => "19212",
                "nama_guru" => "Didit" ,
                "sex"=>"Laki - Laki",
                "alamat"=>"Jl.Nusa Indah",
                "tgl_lhr"=>"12 Agustus 1987",
                "agama"=>"Islam",
                "jenjang"=>"S1",
                "mapel"=>"Pendidikan Agama & Budi Pekerti",
                "tgl_masuk"=>"07 September 2003"
            ],
            [
                "nip" => "19156",
                "nama_guru" => "Dwi Apriani" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Way lima",
                "tgl_lhr"=>"23 Januari 1992",
                "agama"=>"Kristen",
                "jenjang"=>"S1",
                "mapel"=>"Matematika",
                "tgl_masuk"=>"12 Agustus 2010"
            ],
            [
                "nip" => "19177",
                "nama_guru" => "Ahmad Maskur" ,
                "sex"=>"Laki - laki",
                "alamat"=>"Jl.Baturaja",
                "tgl_lhr"=>"28 Oktober 1990",
                "agama"=>"Budha",
                "jenjang"=>"S1",
                "mapel"=>"Pendidikan Olahraga",
                "tgl_masuk"=>"02 Desember 2008"
            ],
            [
                "nip" => "19798",
                "nama_guru" => "Ayu Wardani" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Soekarno",
                "tgl_lhr"=>"15 Maret 1989",
                "agama"=>"Islam",
                "jenjang"=>"S1",
                "mapel"=>"Ilmu Pengatahuan Sosial",
                "tgl_masuk"=>"25 Februari 2003"
            ],
            [
                "nip" => "18569",
                "nama_guru" => "Yeni Susanti" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Kuda Dalam",
                "tgl_lhr"=>"01 Juni 1987",
                "agama"=>"Islam",
                "jenjang"=>"S1",
                "mapel"=>"Seni Budaya & Muatan Lokal",
                "tgl_masuk"=>"15 Juli 2012"
            ],
            [
                "nip" => "20596",
                "nama_guru" => "Widia Lani" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Kompri Senin",
                "tgl_lhr"=>"30 Mei 1987",
                "agama"=>"Islam",
                "jenjang"=>"S1",
                "mapel"=>"Bahasa Indonesia",
                "tgl_masuk"=>"12 September 2006"
            ],
            [
                "nip" => "20596",
                "nama_guru" => "Eka Maharani" ,
                "sex"=>"Perempuan",
                "alamat"=>"Jl.Haji Samsudin",
                "tgl_lhr"=>"20 Mei 1997",
                "agama"=>"Kristen",
                "jenjang"=>"S1",
                "mapel"=>"Pendidikan Pancasila & Kewarganegaraan ",
                "tgl_masuk"=>"12 Januari 2009"
            ]

    
        ];

        return $data;
    }
}
