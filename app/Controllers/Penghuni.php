<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
    protected $penghuniModel;

    public function __construct()
    {
        $this->penghuniModel = new PenghuniModel();
    }

    public function index()
    {
        // $penghuni = $this->penghuniModel->findAll();

        $data = [
            'title' => "Tabel Penghuni Kost",
            'penghuni' => $this->penghuniModel->getPenghuni()
        ];
        return view('pages_back/tbl_penghuni', $data);
    }

    public function detail($slug)
    {
        // $penghuni = $this->penghuniModel->getPenghuni($slug);
        $data = [
            'title' => 'Detail Penghuni Kost',
            'penghuni' => $this->penghuniModel->getPenghuni($slug)
        ];

        //jika detail penghuni tidak ditemukan
        if (empty($data['penghuni'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Penghuni' . $slug . 'tidak ditemukan');
        }
        return view('pages_back/detail_penghuni', $data);
        // dd($penghuni);
    }

    public function create()
    {
        //session(); //dipindahkan ke BaseController karena supaya session jalan dari awal

        $data = [
            'title' => 'From Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('pages_back/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            //default
            // 'name' => 'required|is_unique[tb_penghuni.name]',
            // 'number_ktp' => 'required|is_unique[tb_penghuni.number_ktp]'

            //costum
            'name' => [
                'rules' => 'required|is_unique[tb_penghuni.name]',
                'errors' => [
                    'required' => '{field} wajib di isi.',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],

            'number_ktp' => [
                'rules' => 'required|is_unique[tb_penghuni.number_ktp]',
                'errors' => [
                    'required' => '{field} wajib di isi.',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ]


        ])) {
            //buat pesan kesalahan
            $validation = \Config\Services::validation();

            return redirect()->to('/Penghuni/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->penghuniModel->save([
            'name' => $this->request->getVar('name'),
            'image_person' => $this->request->getVar('image_person'),
            'slug' => $slug,
            'status' => $this->request->getVar('status'),
            'alamat' => $this->request->getVar('alamat'),
            'number_ktp' => $this->request->getVar('number_ktp'),
            'image_ktp' => $this->request->getVar('image_ktp'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        // dd($this->request->getVar('name'));

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/Penghuni');
    }
}
