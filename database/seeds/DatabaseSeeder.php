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


        /*INSERT INTO `videos` (`video_id`, `thuisPloeg`, `uitPloeg`, `stand`, `videoSrc`)
VALUES
(3, 'KVM', 'Gent', '3-2', 'https://www.youtube.com/embed/C3T467D8oqI?ecver=2'),
	(2, 'Standard', 'KVM', '1-2', 'https://www.youtube.com/embed/E0HUVPM_A00?ecver=2'),
	(1, 'KVM', 'Lierse', '1-0', 'https://www.youtube.com/embed/ebICMhOtipg?ecver=2');*/
    }
}
