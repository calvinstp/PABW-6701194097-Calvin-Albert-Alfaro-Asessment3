<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Karyawan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_karyawan' => 'Calvin sss',
                'tgl_lahir'  => '12-09-02',
                'no_hp' => '03123113',
                'alamat' => 'medan',
                'is_aktif' => 1,
            ],
            [
                'nama_karyawan' => 'Yuri sss',
                'tgl_lahir'  => '12-09-02',
                'no_hp' => '023877123212',
                'alamat' => 'bandung',
                'is_aktif' => 1,
            ],
        ];
        $this->db->table('karyawan')->insertBatch($data);

        // foreach ($produk_data as $data) {
        // 	// insert semua data ke tabel
        // }
    }
}
