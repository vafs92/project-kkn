<?php

namespace App\Controllers;

use App\Models\LokasiWisataModel;
use App\Models\PendudukModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $modelPenduduk = new PendudukModel();
        $modelWisata = new LokasiWisataModel();

        $data = [
            'penduduk' => $modelPenduduk->findAll(),
            'wisata' => $modelWisata->findAll()
        ];

        echo view('admin/dashboard', $data);
    }

    public function createWisata()
    {
        return view('admin/create_lokasi_wisata');
    }

    public function storeWisata()
    {
        $model = new LokasiWisataModel();
        $file = $this->request->getFile('gambar');
        $fileName = $file->getRandomName();

        $file->move(WRITEPATH . 'uploads', $fileName);

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'alamat' => $this->request->getPost('alamat'),
            'gambar' => $fileName,
        ]);

        return redirect()->to('/admin');
    }

    public function editWisata($id)
    {
        $model = new LokasiWisataModel();
        $data['wisata'] = $model->find($id);

        return view('admin/edit_lokasi_wisata', $data);
    }

    public function updateWisata($id)
    {
        $model = new LokasiWisataModel();
        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);

            $model->update($id, [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'alamat' => $this->request->getPost('alamat'),
                'gambar' => $fileName,
            ]);
        } else {
            $model->update($id, [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'alamat' => $this->request->getPost('alamat'),
            ]);
        }

        return redirect()->to('/admin');
    }

    public function deleteWisata($id)
    {
        $model = new LokasiWisataModel();
        $model->delete($id);

        return redirect()->to('/admin');
    }
      public function createPenduduk()
    {
        return view('admin/create_penduduk');
    }

    public function storePenduduk()
    {
        $model = new PendudukModel();
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'RT' => $this->request->getPost('RT'),
            'RW' => $this->request->getPost('RW'),
            'umur' => $this->request->getPost('umur'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ]);

        return redirect()->to('/admin');
    }

    public function editPenduduk($id)
    {
        $model = new PendudukModel();
        $data['penduduk'] = $model->find($id);

        return view('admin/edit_penduduk', $data);
    }

    public function updatePenduduk($id)
    {
        $model = new PendudukModel();
        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'RT' => $this->request->getPost('RT'),
            'RW' => $this->request->getPost('RW'),
            'umur' => $this->request->getPost('umur'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ]);

        return redirect()->to('/admin');
    }

    public function deletePenduduk($id)
    {
        $model = new PendudukModel();
        $model->delete($id);

        return redirect()->to('/admin');
    }
}

