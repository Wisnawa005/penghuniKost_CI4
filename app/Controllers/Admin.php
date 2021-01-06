<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Admin extends BaseController
{
	protected $penghuniModel;

	public function __construct()
	{
		$this->penghuniModel = new PenghuniModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Penghuni Kost',
		];
		return view('pages_back/home', $data);
	}

	// public function tbl_penghuni()
	// {
	// 	$penghuni = $this->penghuniModel->findAll();

	// 	$data = [
	// 		'title' => "Tabel Penghuni Kost",
	// 		'penghuni' => $penghuni
	// 	];
	// 	return view('pages_back/tbl_penghuni', $data);
	// }

	// public function detail($slug)
	// {
	// 	echo $slug;
	// }
	//--------------------------------------------------------------------

}
