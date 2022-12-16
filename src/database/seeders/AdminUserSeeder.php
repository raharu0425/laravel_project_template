<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = config("auth.admin_user");
        $admin_user = AdminUser::firstOrCreate(
            [
                "email" => $config['email'],
            ],
            [
                "name" => $config["name"],
                "email" => $config['email'],
                "password" => Hash::make($config["password"])
            ]
        );
    }
}
