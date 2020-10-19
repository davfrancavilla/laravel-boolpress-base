<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Avatar;
use App\User;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $avatarNew = new Avatar();
            $avatarNew->telefono = $faker->phoneNumber;
            $avatarNew->avatar = $faker->imageUrl($width = 640, $height = 480);
            $avatarNew->user_id = $user->id;

            $avatarNew->save();
        }
    }
}
