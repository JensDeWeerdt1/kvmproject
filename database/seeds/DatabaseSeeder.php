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
        $video1 = ['thuisPloeg' => 'KVM','uitPloeg' => 'Gent', 'stand' => '3-2', 'videoSrc' => '10575', 'videoSrc2' => '10577', 'videoSrc3' => '10578'];
        $video2 = ['thuisPloeg' => 'Standard','uitPloeg' => 'KVM', 'stand' => '1-2', 'videoSrc' => '10577', 'videoSrc2' => '10578', 'videoSrc3' => '10575'];
        $video3 = ['thuisPloeg' => 'KVM','uitPloeg' => 'Lierse', 'stand' => '1-0', 'videoSrc' => '10578', 'videoSrc2' => '10575', 'videoSrc3' => '10577'];
        $db1 = DB::table('videos')->insert($video1);
        $db2 = DB::table('videos')->insert($video2);
        $db3 = DB::table('videos')->insert($video3);

        $this->call(UsersTableSeeder::class);

        /*$user1 = ['name' => 'Bert', 'email' => 'bert@gmail.com', 'password' => 'wildenbert', 'profilePic' => 'img/defaultprofilepic.jpg'];
        $db4 = DB::table('users')->insert($user1);*/
    }
}
