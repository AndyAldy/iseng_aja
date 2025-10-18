<?php

namespace App\Controllers;

use App\Models\MobilModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new MobilModel();
        $data['mobil'] = $model->findAll();
        return view('admin/dashboard', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new MobilModel();
        $data = [
            'nama_mobil'  => $this->request->getPost('nama_mobil'),
            'merk_mobil'  => $this->request->getPost('merk_mobil'),
            'tahun_mobil' => $this->request->getPost('tahun_mobil'),
            'jenis_mobil' => $this->request->getPost('jenis_mobil'),
        ];
        $model->save($data);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new MobilModel();
        $data['mobil'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $model = new MobilModel();
        $data = [
            'nama_mobil'  => $this->request->getPost('nama_mobil'),
            'merk_mobil'  => $this->request->getPost('merk_mobil'),
            'tahun_mobil' => $this->request->getPost('tahun_mobil'),
            'jenis_mobil' => $this->request->getPost('jenis_mobil'),
        ];
        $model->update($id, $data);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new MobilModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}