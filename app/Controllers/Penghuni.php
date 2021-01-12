<?php

namespace App\Controllers;

use App\Models\PenghuniModel;
use CodeIgniter\Validation\Rules;

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
            'penghuni' => $this->penghuniModel->getPenghuni($slug),
            //'penghuni' => $this->penghuniModel->paginate(5),
            'pager' => $this->penghuniModel->pager

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
            'title' => 'Form Tambah Data',
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
                    'required' => 'Nama Penghuni wajib di isi.',
                    'is_unique' => 'Nama Penghuni sudah terdaftar'
                ]
            ],

            'number_ktp' => [
                'rules' => 'required|is_unique[tb_penghuni.number_ktp]',
                'errors' => [
                    'required' => 'NIK wajib di isi.',
                    'is_unique' => 'NIK sudah terdaftar'
                ]
            ],

            'image_person' => [
                'rules' => 'max_size[image_person,1024]|is_image[image_person]
                |mime_in[image_person,image/jpg,image/jpeg,image/png]',

                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Maxsimal gambar yaitu 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'image_ktp' => [
                'rules' => 'max_size[image_ktp,1024]|is_image[image_ktp]
                |mime_in[image_ktp,image/jpg,image/jpeg,image/png]',

                'errors' => [
                    'max_size' => 'Maxsimal gambar yaitu 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            //buat pesan kesalahan
            // $validation = \Config\Services::validation();

            // return redirect()->to('/Penghuni/create')->withInput()->with('validation', $validation);
            return redirect()->to('/Penghuni/create')->withInput();
        }

        // ambil gambar image_ktp
        $filePerson = $this->request->getFile('image_ktp');
        //apakah nanti tidak ada gambar yang diupload user maka
        if ($filePerson->getError() == 4) { // error 4 adalah error untuk user tidak mengisi file gambar
            $namaKTP = 'default.png';
        } else {
            //generate nama image_ktp supaya random
            $namaKTP  = $filePerson->getRandomName();
            //pindahkan file gambar ke folder upload/ktp
            $filePerson->move('upload/person', $namaKTP);
        }


        // ambil gambar image_person
        $fileKTP = $this->request->getFile('image_person');
        //apakah nanti tidak ada gambar yang diupload user maka
        if ($filePerson->getError() == 4) { // error 4 adalah error untuk user tidak mengisi file gambar
            $namaPerson = 'default.png';
        } else {
            //generate nama image_ktp supaya random
            $namaPerson  = $fileKTP->getRandomName();
            //pindahkan file gambar ke folder upload/ktp
            $fileKTP->move('upload/ktp', $namaPerson);
        }

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->penghuniModel->save([
            'name' => $this->request->getVar('name'),
            'image_person' => $namaPerson,
            'slug' => $slug,
            'status' => $this->request->getVar('status'),
            'alamat' => $this->request->getVar('alamat'),
            'number_ktp' => $this->request->getVar('number_ktp'),
            'image_ktp' => $namaKTP,
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        // dd($this->request->getVar('name'));

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/Penghuni');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $penghuni = $this->penghuniModel->find($id);

        //cek jika file berdasarkan file default
        if ($penghuni['image_person'] != 'default.png') {
            // cara hapus gambar person
            unlink('upload/person/' . $penghuni['image_person']);
        } else {
            $this->penghuniModel->delete($id);
        }

        if ($penghuni['image_ktp'] != 'default.png') {
            // cara hapus gambar ktp
            unlink('upload/ktp/' . $penghuni['image_ktp']);
        } else {
            $this->penghuniModel->delete($id);
        }

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/Penghuni');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Update Data',
            'validation' => \Config\Services::validation(),
            'penghuni' => $this->penghuniModel->getPenghuni($slug)
        ];

        return view('pages_back/edit', $data);
    }

    public function update($id)
    {
        //pengecekan data yang sama dari field (name)
        $nameOld = $this->penghuniModel->getPenghuni($this->request->getVar('slug'));
        if ($nameOld['name'] == $this->request->getVar('name')) {
            $role_name = 'required';
        } else {
            $role_name = 'required|is_unique[tb_penghuni.name]';
        }

        //pengecekan data yang sama dari field (number_ktp)
        $number_ktpOld = $this->penghuniModel->getPenghuni($this->request->getVar('slug'));
        if ($number_ktpOld['number_ktp'] == $this->request->getVar('number_ktp')) {
            $role_number_ktp = 'required';
        } else {
            $role_number_ktp = 'required|is_unique[tb_penghuni.number_ktp]';
        }

        if (!$this->validate([
            //default
            // 'name' => 'required|is_unique[tb_penghuni.name]',
            // 'number_ktp' => 'required|is_unique[tb_penghuni.number_ktp]'

            //costum
            'name' => [
                'rules' => $role_name,
                'errors' => [
                    'required' => 'Nama Penghuni wajib di isi.',
                    'is_unique' => 'Nama Penghuni sudah terdaftar'
                ]
            ],

            'number_ktp' => [
                'rules' => $role_number_ktp,
                'errors' => [
                    'required' => 'NIK wajib di isi.',
                    'is_unique' => 'NIK sudah terdaftar'
                ]
            ],

            'image_person' => [
                'rules' => 'max_size[image_person,1024]|is_image[image_person]
                    |mime_in[image_person,image/jpg,image/jpeg,image/png]',

                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Maxsimal gambar yaitu 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'image_ktp' => [
                'rules' => 'max_size[image_ktp,1024]|is_image[image_ktp]
                    |mime_in[image_ktp,image/jpg,image/jpeg,image/png]',

                'errors' => [
                    'max_size' => 'Maxsimal gambar yaitu 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]



        ])) {
            return redirect()->to('/Penghuni/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $filePerson = $this->request->getFile('image_person');
        //cek gambar,tetap gambar lama
        if ($filePerson->getError() == 4) {
            $namaPerson = $this->request->getVar('personLama');
        } else {
            //generate nama file random
            $namaPerson = $filePerson->getRandomName();
            //pindahkan gambar person
            $filePerson->move('upload/person', $namaPerson);
            //hapus file yang sudah ada
            unlink('upload/person/' . $this->request->getVar('personLama'));
        }

        $fileKTP = $this->request->getFile('image_ktp');
        //cek gambar,tetap gambar lama
        if ($fileKTP->getError() == 4) {
            $namaKTP = $this->request->getVar('ktpLama');
        } else {
            //generate nama file random
            $namaKTP = $fileKTP->getRandomName();
            //pindahkan gambar ktp
            $fileKTP->move('upload/ktp', $namaKTP);
            //hapus file yang sudah ada
            unlink('upload/ktp/' . $this->request->getVar('ktpLama'));
        }

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->penghuniModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'image_person' => $namaPerson,
            'slug' => $slug,
            'status' => $this->request->getVar('status'),
            'alamat' => $this->request->getVar('alamat'),
            'number_ktp' => $this->request->getVar('number_ktp'),
            'image_ktp' => $namaKTP,
            'no_hp' => $this->request->getVar('no_hp')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate.');

        return redirect()->to('/Penghuni');
    }
}
