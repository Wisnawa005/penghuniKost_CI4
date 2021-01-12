<?php

namespace App\Controllers;

class View extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Penghuni Kost',
        ];
        return view('pages_front/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Penghuni Kost',
        ];
        return view('pages_front/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Penghuni Kost',
        ];
        return view('pages_front/contact', $data);
    }
}
