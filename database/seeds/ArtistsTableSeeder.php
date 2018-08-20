<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Artist::class, 50)->create()
            ->each(function ($artist) {
                for ($i = 0; $i <= rand(1, 8); $i++) {
                    $artist->albums()->save(factory(App\Album::class)->create());
                }
            });
    }
}
