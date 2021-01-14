<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class Services extends BaseController
{
    public function index() //mengambil semua data
    {

        $peng = new ServiceModel();
        $penghuniData = $peng->getPenghuni();
        //print_r($peng->getPenghuni());

        return $this->response->setJSON($penghuniData);
    }

    public function show($id = null) //mengambil data berdasarkan id
    {
        $emp = new ServiceModel();
        $penghuniData = $emp->getPenghuniById($id);

        return $this->response->setJSON($penghuniData);
    }

    public function create() //membuat data berdasarkan id
    {
        $emp = new ServiceModel();

        $json = $this->request->getJSON();

        $data = get_object_vars($json);

        $affRows = $emp->insertPenghuni($data);

        $msg = [];
        if ($affRows > 0) {
            //pesan sukses
            $msg = [
                'status' => 'OK',
                'message' => 'Data Berasil Disimpan',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(201);
            //->setBody($msg);
        } else {
            //pesan gagal
            $msg = [
                'status' => 'Error',
                'message' => 'Data Gagal Disimpan',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(500);
            //->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }

    public function update($id = null) //update data berdasarkan id
    {
        $emp = new ServiceModel();

        $json = $this->request->getJSON();

        $data = get_object_vars($json);

        $affRows = $emp->updatePenghuni($id, $data);

        $msg = [];
        if ($affRows > 0) {
            //pesan sukses
            $msg = [
                'status' => 'OK',
                'message' => 'Data Berasil Diupdate',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(201);
            //->setBody($msg);
        } else {
            //pesan gagal
            $msg = [
                'status' => 'Error',
                'message' => 'Data Gagal Diupdate',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(500);
            //->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }

    public function delete($id = null) //delete data berdasarkan id
    {
        $emp = new ServiceModel();

        $affRows = $emp->deletePenghuni($id);

        $msg = [];
        if ($affRows > 0) {
            //pesan sukses
            $msg = [
                'status' => 'OK',
                'message' => 'Data Berasil Dihapus',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(200);
            //->setBody($msg);
        } else {
            //pesan gagal
            $msg = [
                'status' => 'Error',
                'message' => 'Data Gagal Dihapus',
                'affacted_wors' => $affRows
            ];

            $this->response->setStatusCode(500);
            //->setBody($msg);
        }
        return $this->response->setJSON($msg);
    }
}
