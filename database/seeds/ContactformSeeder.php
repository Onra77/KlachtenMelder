<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactform')->insert([
            'name' => "Bas", 
            'email' => "email1@hotmail.nl",
            'content' => "bla balaksjflkjsdlfkj"
        ]);

        DB::table('contactform')->insert([
            'name' => "Dedde", 
            'email' => "email1@hotmai2.nl",
            'content' => "bla balagfsadgksjflkjsdlfkj"
        ]);

        DB::table('contactform')->insert([
            'name' => "Jaep", 
            'email' => "email1@hotmai3.nl",
            'content' => "bla balakhjkhjjjjjjjjjsjflkjsdlfkj"
        ]);

        DB::table('contactform')->insert([
            'name' => "Arno", 
            'email' => "email1@hotmai4.nl",
            'content' => "bla balakjjjjjjjjjjjjjjjjjjjjjjjj435sjflkjsdlfkj"
        ]);
    }
}
