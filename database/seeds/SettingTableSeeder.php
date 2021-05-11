<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

           'site_name' =>"Nomad_pace",
           'contact_number' =>'761830736',
           'contact_email' =>'nomadpaceofficial@gmail.com',
           'address' =>'Kandy - Sri Lanka'


        ]);
    }
}
