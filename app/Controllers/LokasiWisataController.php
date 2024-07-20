<?php

namespace App\Controllers;

use App\Models\LokasiWisataModel;
use CodeIgniter\Controller;

class LokasiWisataController extends Controller
{
    public function index()
    {
        $model = new LokasiWisataModel();
        $data['wisata'] = $model->findAll();

        return view('admin/lokasi_wisata', $data);
    }

    public function create()
    {
        return view('admin/create_lokasi_wisata');
    }

    public function store()
    {
        $model = new LokasiWisataModel();
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('/admin/lokasi_wisata');
    }

    public function edit($id)
    {
        $model = new LokasiWisataModel();
        $data['wisata'] = $model->find($id);

        return view('admin/edit_lokasi_wisata', $data);
    }

    public function update($id)
    {
        $model = new LokasiWisataModel();
        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('/admin/lokasi_wisata');
    }

    public function delete($id)
    {
        $model = new LokasiWisataModel();
        $model->delete($id);

        return redirect()->to('/admin/lokasi_wisata');
    }
}
