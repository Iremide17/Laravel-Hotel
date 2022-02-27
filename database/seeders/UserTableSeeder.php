<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Shittu Oluwaseun',
            'email'     => 'shittuopeyemi24@gmail.com',
            'password'  => bcrypt('midshot17'),
            'type'      => User::SUPERADMIN,
            'profile_photo_path'    => 'profile-photos/author-four.jpg'
        ]);

        User::factory()->create([
            'name'      => 'Adesodun Olubunmi',
            'email'     => 'bunmi@gmail.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
            'profile_photo_path'    => 'profile-photos/author-two.jpg'
        ]);

        User::factory()->create([
            'name'      => 'Obayomi Oluwaseun',
            'email'     => 'oluwaseun@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
            'profile_photo_path'    => 'profile-photos/author-one.jpg'
        ]);

        User::factory()->create([
            'name'      => 'Idowu Akeem',
            'email'     => 'akeen@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
            'profile_photo_path'    => 'profile-photos/author-three.jpg'
        ]);

        User::factory()->create([
            'name'      => 'Molumoh Doris',
            'email'     => 'doris@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
            'profile_photo_path'    => 'profile-photos/author-one.jpg'
        ]);

    }
}
