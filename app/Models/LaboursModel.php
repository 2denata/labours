<?php

namespace App\Models;

use CodeIgniter\Model;

class LaboursModel extends Model
{
    protected $table = "pekerjaan";
    protected $allowedFields = ['kodePekerjaan', 'namaPekerjaan', 'waktuPekerjaan', 'deskripsiPekerjaan', 'alamat', 'foto'];
    protected $primaryKey = 'kodePekerjaan';

    public function dataPekerjaan()
    {
        return $this->findAll();
    }

    public function getPekerjaan($kode)
    {
        return $this->where(['kodePekerjaan' => $kode])->first();
    }

    public function simpan($record) 
    {

    }

}