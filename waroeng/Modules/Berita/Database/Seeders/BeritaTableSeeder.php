<?php

namespace Modules\Berita\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('berita')->insert([
                'judul' => $faker->nama,
                'header' => $faker->header,
                'isi' => $faker->isi,
                'kelompok' => $faker->kelompok,
            ]);
        }

        // $this->call("OthersTableSeeder");
    }
}
