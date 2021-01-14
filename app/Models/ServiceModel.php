<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    public function getPenghuni()
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_penghuni')->get(20, 0);
        return $query->getResult();
    }

    public function getPenghuniById($id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_penghuni')
            ->where('id', $id)
            ->get();
        return $query->getResult();
    }

    public function insertPenghuni($data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_penghuni')
            ->ignore(true)
            ->insert($data);
        return $db->affectedRows();
    }

    public function updatePenghuni($id, $data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_penghuni')
            ->where('id', $id)
            ->update($data);
        return $db->affectedRows();
    }

    public function deletePenghuni($id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tb_penghuni')
            ->where('id', $id)
            ->delete();
        return $db->affectedRows();
    }
}
