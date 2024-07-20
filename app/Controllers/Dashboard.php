<?php

namespace App\Controllers;

use App\Models\LokasiWisataModel;
use App\Models\PendudukModel;
class dashboard extends BaseController
{
    public function index()
    {
        return view('home');
    }
     public function penduduk()
    {
        $model = new PendudukModel();
        $data['penduduk'] = $model->findAll();

        return view('home', $data);
    }
    public function wisata()
    {
        $model = new LokasiWisataModel();
        $data['wisata'] = $model->findAll();

        return view('home', $data);
    }
}
    
