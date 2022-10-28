<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubes')->insert([
            'name' => 'Fallen Angel',
            'views' => 663,
            'src' => 'https://youtu.be/qU8tMdSVRBA'
        ]);

        DB::table('youtubes')->insert([
            'name' => 'Lana Del Rey - Old Money (Music Video)',
            'views' => 1287821  ,
            'src' => 'https://youtu.be/QhZ04ruakxg'
        ]);

        DB::table('youtubes')->insert([
            'name' => 'resonance - home (slowed & reverb)',
            'views' => 2506579,
            'src' => 'https://youtu.be/Ks17y5uTrbw'
        ]);

        DB::table('youtubes')->insert([
            'name' => 'Electric Guest - Troubleman',
            'views' => 29336054,
            'src' => 'https://youtu.be/3OC2aPCuzjo'
        ]);

        DB::table('youtubes')->insert([
            'name' => 'Kavinsky - Nightcall',
            'views' => 258630544,
            'src' => 'https://youtu.be/MV_3Dpw-BRY'
        ]);


    }
}
