<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_lengkap' => 'Evenetus Worshiper Purba',
            'nama_pengguna' => 'Even',
            'tanggal_lahir' => '2001-01-01',
            'nik' => '123456789',
            'nohp' => '082123456789',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
        ]);
        User::create([
            'nama_lengkap' => 'Admin JARSA',
            'nama_pengguna' => 'Admin',
            'tanggal_lahir' => '2001-01-01',
            'nik' => '123456788',
            'nohp' => '082123456788',
            'email' => 'adminjarsa@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'nama_lengkap' => 'Guru JARSA',
            'nama_pengguna' => 'Guru',
            'tanggal_lahir' => '2001-01-01',
            'nik' => '123456777',
            'nohp' => '082123456777',
            'email' => 'gurujarsa@gmail.com',
            'password' => Hash::make('guru'),
            'is_guru' => true,
        ]);

        // guru
        Guru::create([
            'link_video' => 'https://www.youtube.com/embed/B2IldXHBDA0',
        ]);
    }
}