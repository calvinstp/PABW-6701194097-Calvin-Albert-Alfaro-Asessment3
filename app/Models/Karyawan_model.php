<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan_model extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    // protected $table      = 'news';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'nama_karyawan', 'tgl_lahir', 'no_hp', 'alamat', 'is_aktif'];


    public function tambah_karyawan($data)
    {
        $query = $this->db->table('karyawan')->insert($data);
        return $query;
    }
    public function delete_karyawan($id)
    {
        $query = $this->db->table('karyawan')->delete(['id' => $id]);
        return $query;
    }
    public function edit_karyawan($data, $id)
    {
        $query = $this->db->table('karyawan')->update($data, (['id' => $id]));
        return $query;
    }
}
