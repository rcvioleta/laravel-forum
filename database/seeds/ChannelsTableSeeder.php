<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = ['Wordpress', 'Laravel', 'Symfony', 'HTML5', 'CSS3', 'JavaScript'];

        for ($x = 0; $x < count($channels); $x++) {
            App\Channel::create([
                'title' => $channels[$x]
            ]);
        }
    }
}
