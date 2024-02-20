<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students = [
        [
            "id" => 1,
            "nis" => 123456,
            "nama" => "Ayla",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ],
        [ 
            "id" => 2,
            "nis" => 1234567,
            "nama" => "Amanda",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ],
        [
            "id" => 3,
            "nis" => 1234568,
            "nama" => "Salsa",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ],
        [
            "id" => 4,
            "nis" => 1234569,
            "nama" => "Mahes",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ],
        [
            "id" => 5,
            "nis" => 1234570,
            "nama" => "Alysa",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ],
        [
            "id" => 6,
            "nis" => 1234571,
            "nama" => "Vania",
            "tgl_lahir" => "2000-01-15",
            "alamat" => "Kecamatan Gebog, kudus, jawa tengah",
        ]
    ];

    public static function all()
    {
        return self::$students;
    }
}