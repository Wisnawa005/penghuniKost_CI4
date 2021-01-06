<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghuniModel extends Model
{
    protected $table = 'tb_penghuni';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'image_person', 'slug', 'status', 'alamat', 'number_ktp', 'image_ktp', 'no_hp'];

    public function getPenghuni($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
