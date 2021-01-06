<?php

namespace App\Controllers;

class View extends BaseController
{
    public function index()
    {
        $data['title'] = "Web Penghuni Kost Udayana";
        return view('pages_front/home', $data);
    }
}
