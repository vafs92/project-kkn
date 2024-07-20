<?php

namespace App\Controllers;

use App\Models\PendudukModel;
use CodeIgniter\Controller;

class Penduduk extends Controller
{
    public function index()
    {
        $model = new PendudukModel();
        $data['penduduk'] = $model->findAll();

        return view('penduduk/index', $data);
    }

    public function create()
    {
        return view('penduduk/create');
    }

    public function store()
    {
        $model = new PendudukModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'RT' => $this->request->getPost('RT'),
            'RW' => $this->request->getPost('RW'),
            'umur' => $this->request->getPost('umur'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $model->save($data);

        return redirect()->to('/penduduk');
    }

    public function edit($id)
    {
        $model = new PendudukModel();
        $data['penduduk'] = $model->find($id);

        return view('penduduk/edit', $data);
    }

    public function update($id)
    {
        $model = new PendudukModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'RT' => $this->request->getPost('RT'),
            'RW' => $this->request->getPost('RW'),
            'umur' => $this->request->getPost('umur'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $model->update($id, $data);

        return redirect()->to('/penduduk');
    }

    public function delete($id)
    {
        $model = new PendudukModel();
        $model->delete($id);

        return redirect()->to('/penduduk');
    }
}
