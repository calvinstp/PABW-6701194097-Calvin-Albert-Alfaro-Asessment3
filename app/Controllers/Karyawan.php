<?php

namespace App\Controllers;

use App\Models\Karyawan_model;

class Karyawan extends BaseController
{
    protected $karyawan_model;
    public function __construct()
    {
        $this->karyawan_model = new Karyawan_model();
    }
    public function index()
    {
        $karyawan = $this->karyawan_model->findAll();
        $data = [
            'title' => 'Home',
            'karyawan' => $karyawan
        ];
        // var_dump($produk);
        return view('pages/home', $data);
    }
    public function tambahKaryawan()
    {
        $data = [
            'title' => 'Tambah Karyawan',
        ];
        // tampilkan form create
        return view('pages/tambah_karyawan', $data);
    }
    public function editKaryawan($id)
    {
        $karyawan = $this->karyawan_model->where('id', $id)->first();
        $data = [
            'title' => 'Edit Karyawan',
            'karyawan' => $karyawan,
        ];
        return view('pages/edit_karyawan', $data);
    }
    public function save()
    {
        $request = \Config\Services::request();
        $data = [
            "nama_karyawan" => $request->getPost('nama_karyawan'),
            "tgl_lahir" => $request->getPost('tgl_lahir'),
            "no_hp" => $request->getPost('no_hp'),
            "alamat" => $request->getPost('alamat'),
            "is_aktif" => 1
        ];
        // dd($data);
        $this->karyawan_model->tambah_karyawan($data);
        return redirect()->to(base_url('karyawan'))->with('success', 'Tambah karyawan ' . 'berhasil');
        // return redirect()->to('pages');
        // var_dump($data);
    }

    public function delete($id)
    {
        $this->karyawan_model->delete_karyawan($id);
        return redirect()->to(base_url('karyawan'))->with('success', 'Delete karyawan ' . 'berhasil');
    }
    public function edit()
    {
        $request = \Config\Services::request();
        $id =  $request->getPost('id');
        $data = [
            "nama_karyawan" => $request->getPost('nama_karyawan'),
            "tgl_lahir" => $request->getPost('tgl_lahir'),
            "no_hp" => $request->getPost('no_hp'),
            "alamat" => $request->getPost('alamat'),
            "is_aktif" => 1
        ];
        $this->karyawan_model->edit_karyawan($data, $id);
        return redirect()->to(base_url('karyawan'))->with('success', 'Ubah karyawan ' . 'berhasil');
    }
}
