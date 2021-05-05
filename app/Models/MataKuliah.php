<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table='matakuliah'; //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa_matakuliah
    /** 
     * The attributes that are mass assignable. *
     * @var array
    */
    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'Kelas',
        'semester',
    ];

    public function matakuliah()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_matakuliah', 'matakuliah_id', 'mahasiswa_nim')
        ->withPivot('nilai');
    }
};
