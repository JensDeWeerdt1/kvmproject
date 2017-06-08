<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('videos')->insert([
            'thuisPloeg' => 'KVM',
            'uitPloeg' => 'Lierse',
            'stand' => '0-1',
            'videoSrc' => 'https://www.youtube.com/embed/C3T467D8oqI?ecver=2'
        ]);
    }
}
