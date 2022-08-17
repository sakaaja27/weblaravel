<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pegawai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')
        ->insert([
            'nama'=> 'Saka Karna',
            'jeniskelamin' => 'Laki-laki',
            'notelpon'=> '12345678'
        ]);
    }
}
