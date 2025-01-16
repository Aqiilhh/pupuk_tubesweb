<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = [
            ['provinsi_id' => 1, 'kota_id' => 101, 'kota' => 'KABUPATEN KEPULAUAN SERIBU', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 1, 'kota_id' => 102, 'kota' => 'KOTA JAKARTA SELATAN', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 1, 'kota_id' => 103, 'kota' => 'KOTA JAKARTA TIMUR', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 1, 'kota_id' => 104, 'kota' => 'KOTA JAKARTA PUSAT', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 1, 'kota_id' => 105, 'kota' => 'KOTA JAKARTA BARAT', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 1, 'kota_id' => 106, 'kota' => 'KOTA JAKARTA UTARA', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 201, 'kota' => 'KABUPATEN BOGOR', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 202, 'kota' => 'KABUPATEN SUKABUMI', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 203, 'kota' => 'KABUPATEN CIANJUR', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 204, 'kota' => 'KABUPATEN BANDUNG', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 205, 'kota' => 'KABUPATEN GARUT', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 206, 'kota' => 'KABUPATEN TASIKMALAYA', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 207, 'kota' => 'KABUPATEN CIAMIS', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 208, 'kota' => 'KABUPATEN KUNINGAN', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 209, 'kota' => 'KABUPATEN CIREBON', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 210, 'kota' => 'KABUPATEN MAJALENGKA', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 211, 'kota' => 'KABUPATEN SUMEDANG', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 212, 'kota' => 'KABUPATEN INDRAMAYU', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 213, 'kota' => 'KABUPATEN SUBANG', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 214, 'kota' => 'KABUPATEN PURWAKARTA', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 215, 'kota' => 'KABUPATEN KARAWANG', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 216, 'kota' => 'KABUPATEN BEKASI', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 217, 'kota' => 'KABUPATEN BANDUNG BARAT', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 218, 'kota' => 'KABUPATEN PANGANDARAN', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 219, 'kota' => 'KOTA BOGOR', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 220, 'kota' => 'KOTA SUKABUMI', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 221, 'kota' => 'KOTA BANDUNG', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 222, 'kota' => 'KOTA CIREBON', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 223, 'kota' => 'KOTA BEKASI', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 224, 'kota' => 'KOTA DEPOK', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 225, 'kota' => 'KOTA CIMAHI', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 226, 'kota' => 'KOTA TASIKMALAYA', 'created_at' => now(), 'updated_at' => now()],
            ['provinsi_id' => 2, 'kota_id' => 227, 'kota' => 'KOTA BANJAR', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('kotas')->insert($kota);
    }
}
