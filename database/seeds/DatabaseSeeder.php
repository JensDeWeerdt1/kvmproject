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
        $video1 = ['thuisPloeg' => 'KVM','uitPloeg' => 'Gent', 'stand' => '3-2', 'videoSrc' => 'https://www.youtube.com/embed/C3T467D8oqI?ecver=2'];
        $video2 = ['thuisPloeg' => 'Standard','uitPloeg' => 'KVM', 'stand' => '1-2', 'videoSrc' => 'https://www.youtube.com/embed/E0HUVPM_A00?ecver=2'];
        $video3 = ['thuisPloeg' => 'KVM','uitPloeg' => 'Lierse', 'stand' => '1-0', 'videoSrc' => 'https://www.youtube.com/embed/ebICMhOtipg?ecver=2'];
        $db1 = DB::table('videos')->insert($video1);
        $db2 = DB::table('videos')->insert($video2);
        $db3 = DB::table('videos')->insert($video3);

        $user1 = ['name' => 'Bert', 'email' => 'bert@gmail.com', 'password' => 'wildenbert', 'profilePic' => 'img/defaultprofilepic.jpg'];
        $db4 = DB::table('users')->insert($user1);
    }
}
