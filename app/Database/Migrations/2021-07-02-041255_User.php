<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up() // function up berfungsi untuk membuat struktur database
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'nip'       => [
				'type'       => 'VARCHAR',
				'constraint' => '30',
			],

			'alamat'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('User');
	}

	public function down() // menghapus sebuah field / tabel
	{
		$this->forge->dropTable('User');
	}
}
