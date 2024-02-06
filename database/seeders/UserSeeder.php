<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $data = [
                'email'             => 'laramaze@gmail.com',
                'name'              => 'Laramaze Admin',
                'gauth'             => null,
                'username'          => null,
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
            ];

            $user = User::create($data);
            $user->assignRole('Administrator');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
