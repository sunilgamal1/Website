<?php

namespace Database\Seeders;

use App\Model\Role;
use App\User;
use Config;
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
        $user = User::where('id', 1)->first();
        if (!isset($user)) {
            User::create([
                'name' => 'sunil',
                'email' => 'sunil@gmail.com',
                'username' => 'sunil',
                'password' => Hash::make('Sunil@123'),
                'password_resetted' => 1,
                'role_id' => 1,
                'is_2fa_enabled' => 0
            ]);
        }
    }
}
