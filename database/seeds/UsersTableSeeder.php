<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =  App\User::create([
              'name' => 'Chinthaka Prasad',
              'email' => 'chika4it@gmail.com',
              'password'=>bcrypt('Alphawave@1'),
              'admin' =>1 

        ]);


        App\Profile::create([


           'user_id' => $user->id,
           'avatar' => 'uploads/avatars/1.png',
          'about' => 'sdfkdfksfsdhfkjsdhf fsdfhdskfs df sfkjsdkf dskfjdskfj sdkfjskdf',
           'facebook' => 'facebook.com',
           'youtube' => 'youtube.com'

        ]);
    }
}
