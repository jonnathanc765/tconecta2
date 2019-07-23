<?php

use Illuminate\Database\Seeder;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Mail::truncate();

        factory(App\Mail::class, 150)->create();
    }
}
