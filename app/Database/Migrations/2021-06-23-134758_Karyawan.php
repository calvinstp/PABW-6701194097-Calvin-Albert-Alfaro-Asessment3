<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_karyawan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'tgl_lahir'      => [
				'type'           => 'DATE',
				// 'constraint'     => '255'
			],
			'no_hp' => [
				'type'           => 'INT',
				'constraint'     => 100
			],
			'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'is_aktif'      => [
				'type'           => 'INT',
				'constraint'     => 1
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('karyawan', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
